<?php


namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BusinessDirectory;
use App\Models\DirectoryReview;
use App\Models\ReviewsReply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AdminBusinessDirecrory extends Controller
{
    public function index()
    {
        $directories = BusinessDirectory::join('users', 'users.id', '=', 'business_directorys.userId')
            ->join('user_details', 'user_details.userId', '=', 'business_directorys.userId')
            ->orderBy('created_at','DESC')
            ->get(
                [
                    'business_directorys.id',
                    'business_directorys.category',
                    'business_directorys.logo',
                    'business_directorys.subcategory',
                    'business_directorys.directory_status',
                    'business_directorys.created_at',
                    'business_directorys.borough',
                    'business_directorys.is_premium',
                    'users.name',
                    'users.email',
                    'user_details.phone',
                    'user_details.company_name',
                    'user_details.company_reg_no'
                ]
            );
        return view('backend.business-directories', ['directories' => $directories]);
    }


    public function activateDirectory($id, $action)
    {

        if ($action == 'activate') {
            if (BusinessDirectory::where('id', $id)->update(['directory_status' => 'live',])) {
                Session::flash('success', "BusinessDirectory activated Successfully");
                return redirect('/admins/businessdirectories');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/businessdirectories');
            }
        }
        if ($action == 'deactivate') {
            if (BusinessDirectory::where('id', $id)->update(['directory_status' => 'pending',])) {
                Session::flash('success', "BusinessDirectory deactivated Successfully");
                return redirect('/admins/businessdirectories');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/businessdirectories');
            }
        }
        if ($action == 'reject') {
            if (BusinessDirectory::where('id', $id)->update(['directory_status' => 'rejected',])) {
                Session::flash('success', "BusinessDirectory Rejected Successfully");
                return redirect('/admins/businessdirectories');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/businessdirectories');
            }
        }
        if ($action == 'accept') {
            if (BusinessDirectory::where('id', $id)->update(['directory_status' => 'pending',])) {
                Session::flash('success', "BusinessDirectory Accepted Successfully, You Can Activate Now");
                return redirect('/admins/businessdirectories');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/businessdirectories');
            }
        }

        if ($action == 'remove') {
            $directory =  BusinessDirectory::where('id', '=', $id)->first();
            if ($directory) {
                if ($directory->logo !== null) {
                    $path = public_path('uploads/' . $directory->logo);
                    if (File::exists($path)) {
                        unlink($path);
                    }
                }
                if ($directory->company_images && sizeof($directory->company_images) > 0) {
                    foreach ($directory->company_images as $key => $imageOld) {
                        $path = public_path('uploads/' . $imageOld['name']);
                        if (File::exists($path)) {
                            unlink($path);
                        }
                    }
                }
                if ($directory->delete()) {
                    Session::flash('success', "BusinessDirectory Deleted Successfully");
                    return redirect('/admins/businessdirectories');
                } else {
                    Session::flash('error', "Something went wrong");
                    return redirect('/admins/businessdirectories');
                }
            }
            Session::flash('error', 'Something went wrong');
            return redirect('/admins/businessdirectories');
        }
    }


    public function viewDirectory($id)
    {
        $directory = BusinessDirectory::where('business_directorys.id', $id)
            ->join('users', 'users.id', '=', 'business_directorys.userId')
            ->join('user_details', 'user_details.userId', '=', 'business_directorys.userId')
            ->get(
                [
                    'business_directorys.*',
                    'users.name',
                    'users.email',
                    'user_details.phone',
                    'user_details.company_name',
                    'user_details.company_reg_no',
                    'user_details.charity_number',
                    'user_details.billing_address'
                ]
            );
        $reviews = DirectoryReview::where('directoryId', $id)
            ->where('review_status', 'live')
            ->join('users', 'users.id', '=', 'directory_reviews.userId')
            ->join('business_directorys', 'business_directorys.id', '=', 'directory_reviews.directoryId')
            ->get([
                'directory_reviews.id',
                'business_directorys.userId',
                'directory_reviews.rating',
                'directory_reviews.review',
                'directory_reviews.created_at',
                'users.name',
            ]);
            $replys = ReviewsReply::where('directoryId', $id)
            ->where('reply_status', 'live')
            ->join('users', 'users.id', '=', 'reviews_reply.userId')
            ->get([
                // 'reviews_reply.id',
                'reviews_reply.reviewId',
                'reviews_reply.userId',
                'reviews_reply.reply',
                'reviews_reply.created_at',
                'users.name',
                'users.id',
            ]);

        $reviewsCount = DirectoryReview::where('directoryId', $id)
            ->where('review_status', 'live')
            ->count();

        return view('backend.admin-view-single-directory', ['directory' => $directory, 'reviews' => $reviews, 'replys'=>$replys, 'reviewsCount' => $reviewsCount]);
    }


    function getDirectoryReviews()
    {
        $reviews = DirectoryReview::join('users', 'users.id', '=', 'directory_reviews.userId')
            ->join('business_directorys', 'business_directorys.id', '=', 'directory_reviews.directoryId')
            ->join('user_details', 'user_details.userId', '=', 'directory_reviews.userId')
            ->get([
                'directory_reviews.id',
                'directory_reviews.directoryId',
                'directory_reviews.review',
                'directory_reviews.rating',
                'directory_reviews.website',
                'directory_reviews.review_status',
                'directory_reviews.created_at',
                'users.name',
                'users.email',
                'business_directorys.category',
                'user_details.company_name',
            ]);

        return view('backend.directory-reviews', ['reviews' => $reviews]);
    }



    function getDirectoryReplys()
    {
        $replys = ReviewsReply::join('users', 'users.id', '=', 'reviews_reply.userId')
        ->join('user_details', 'user_details.userId', '=', 'users.id')
        ->join('directory_reviews', 'directory_reviews.id', '=', 'reviews_reply.reviewId')
        // ->join('business_directorys', 'business_directorys.id', '=', 'reviews_reply.directoryId')
        ->get([
            'users.name',
            'user_details.company_name',
            'directory_reviews.review',
            'directory_reviews.rating',
            'reviews_reply.id',
            'reviews_reply.reply',
            'reviews_reply.reply_status',
            'reviews_reply.created_at',
        ]);
        // dd($replys);
        return view('backend.directory-replys', ['replys' => $replys]);
    }

    function manageDirectoryReviews($id, $action)
    {

        if ($action == 'activate') {
            if (DirectoryReview::where('id', $id)->update(['review_status' => 'live',])) {
                Session::flash('success', "Review Status updated successfully");
                return redirect('/admins/reviews');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/reviews');
            }
        }

        if ($action == 'deactivate') {
            if (DirectoryReview::where('id', $id)->update(['review_status' => 'pending',])) {
                Session::flash('success', "Review Status updated successfully");
                return redirect('/admins/reviews');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/reviews');
            }
        }
        if ($action == 'remove') {
            if (DirectoryReview::where('id', $id)->delete()) {
                Session::flash('success', "Review Deleted Successfully");
                return redirect('/admins/reviews');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/reviews');
            }
        }
    }





    function manageDirectoryReplys($id, $action)
    {

        if ($action == 'activate') {
            if (ReviewsReply::where('id', $id)->update(['reply_status' => 'live',])) {
                Session::flash('success', "Review Reply Status updated successfully");
                return redirect('/admins/replys');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/replys');
            }
        }

        if ($action == 'deactivate') {
            if (ReviewsReply::where('id', $id)->update(['reply_status' => 'pending',])) {
                Session::flash('success', "Review Reply Status updated successfully");
                return redirect('/admins/replys');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/replys');
            }
        }
        if ($action == 'remove') {
            if (ReviewsReply::where('id', $id)->delete()) {
                Session::flash('success', "Review Reply Deleted Successfully");
                return redirect('/admins/replys');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/replys');
            }
        }
    }
}

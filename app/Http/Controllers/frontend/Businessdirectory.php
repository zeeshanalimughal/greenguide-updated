<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Borough;
use App\Models\BusinessDirectory as ModelsBusinessDirectory;
use App\Models\DirectoryReview;
use App\Models\pages\Businessdirectory as PagesBusinessdirectory;
use App\Models\pages\LinksCard;
use App\Models\ReviewsReply;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class Businessdirectory extends Controller
{
    function index()
    {
        $businessdirectory = PagesBusinessdirectory::where('id', 1)->get();
        $categories = ModelsBusinessDirectory::select('category')
            ->where('directory_status', 'live')
            ->distinct()
            ->get();

        $count = ModelsBusinessDirectory::where('directory_status', 'live')
            ->select('category')
            ->distinct()
            ->count();
        $cat = [];
        for ($i = 0; $i < sizeof($categories->toArray()); $i++) {
            $count = ModelsBusinessDirectory::where('directory_status', 'live')
                ->where('category', $categories[$i]->category)
                ->distinct()
                ->count();
            $cat['' . $categories[$i]->category]['key'] = $count;
        }
        if ($categories->toArray() > 0) {
            return view('frontend.businessdirectory', ['businessdirectory' => $businessdirectory, 'categories' => $categories, 'cat' => $cat,'links'=>LinksCard::where('id',1)->get()]);
        }
        return view('frontend.businessdirectory', ['businessdirectory' => $businessdirectory,'links'=>LinksCard::where('id',1)->get()]);
    }


    function getDirectoriesByCategory($category)
    {
        $directories =  ModelsBusinessDirectory::where('category', $category)
            ->where('business_directorys.directory_status', 'live')
            ->join('users', 'users.id', '=', 'business_directorys.userId')
            ->join('user_details', 'user_details.userId', '=', 'business_directorys.userId')
            ->get(
                [
                    'business_directorys.id',
                    'business_directorys.category',
                    'business_directorys.logo',
                    'business_directorys.subcategory',
                    'business_directorys.borough',
                    'business_directorys.company_images',
                    'users.name',
                    'users.email',
                    'user_details.phone',
                    'user_details.company_name',
                    'user_details.company_reg_no',
                ]
            );
          foreach($directories as $directory){
              $directory->rating = DirectoryReview::where('directoryId',$directory->id)->avg('rating');
          }
        return view('frontend.business-directories-by-category', ['directories' => $directories, 'category' => $category]);
    }


    

    function getSingleDirectory($id)
    {
        $directory =  ModelsBusinessDirectory::where('business_directorys.id', $id)
            ->where('directory_status', 'live')
            ->join('users', 'users.id', '=', 'business_directorys.userId')
            ->join('user_details', 'user_details.userId', '=', 'business_directorys.userId')
            ->get(
                [
                    'business_directorys.*',
                    'users.name',
                    // 'users.id',
                    'users.email',
                    'user_details.phone',
                    'user_details.company_name',
                    'user_details.company_reg_no',
                    'user_details.charity_number',
                    'user_details.billing_address'
                ]
            );
           
                $directory->rating = DirectoryReview::where('directoryId',$id)->avg('rating');
        //  dd($directory->rating);
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

            // dd($replys);



            
        $reviewsCount = DirectoryReview::where('directoryId', $id)
            ->where('review_status', 'live')
            ->count();

        // dd($reviews);

        if (sizeof($directory->toArray()) > 0) {
            return view('frontend.view-single-directory', ['directory' => $directory, 'reviews' => $reviews, 'replys'=>$replys,'reviewsCount' => $reviewsCount]);
        }
        return redirect()->route('businessdirectory');
    }

    function add_new_directory()
    {
        $boroughs = Borough::where('status','live')->get();
        $user = User::where('id', Auth::user()->id)
            ->select(['name', 'email'])
            ->first();
        $userDetails = UserDetails::where('userId', Auth::user()->id)->select(['company_name', 'phone', 'charity_number', 'company_reg_no'])->first();

        return view('frontend.add-new-directory', ['userDetails' => $userDetails, 'user' => $user,'boroughs'=> $boroughs]);
    }



    function createNewDirectory(Request $request)
    {
        // dd($request->company_images);
        $request->validate([
            'category' => 'required', 'subcategory' => 'required', 'borough' => 'required', 'monday_open' => 'required', 'monday_close' => 'required', 'tuesday_open' => 'required', 'tuesday_close' => 'required', 'wednesday_open' => 'required', 'wednesday_close' => 'required', 'thursday_open' => 'required', 'thursday_close' => 'required', 'friday_open' => 'required', 'friday_close' => 'required', 'saturday_open' => 'required', 'saturday_close' => 'required', 'sunday_open' => 'required', 'company_description' => 'required', 'sunday_close' => 'required', 'holiday_open' => 'required', 'holiday_close' => 'required', 'logo' => 'required',
        ]);
        $directory = new ModelsBusinessDirectory();

        $directory->userId = Auth::user()->id;
        $directory->category = $request->input('category');
        $directory->subcategory = $request->input('subcategory');
        if ($request->input('sub_sub_category') !== null) {
            $directory->sub_sub_category = $request->input('sub_sub_category');
        }

        $directory->company_description = $request->input('company_description');
        $directory->borough = $request->input('borough');
        $directory->monday_open = $request->input('monday_open');
        $directory->monday_close = $request->input('monday_close');
        $directory->tuesday_open = $request->input('tuesday_open');
        $directory->tuesday_close = $request->input('tuesday_close');
        $directory->wednesday_open = $request->input('wednesday_open');
        $directory->wednesday_close = $request->input('wednesday_close');
        $directory->thursday_open = $request->input('thursday_open');
        $directory->thursday_close = $request->input('thursday_close');
        $directory->friday_open = $request->input('friday_open');
        $directory->friday_close = $request->input('friday_close');
        $directory->saturday_open = $request->input('saturday_open');
        $directory->saturday_close = $request->input('saturday_close');
        $directory->sunday_open = $request->input('sunday_open');
        $directory->sunday_close = $request->input('sunday_close');
        $directory->holiday_open = $request->input('holiday_open');
        $directory->holiday_close = $request->input('holiday_close');

        $links = [];
        foreach ($request->social as $link) {
            $links[]['links'] = $link;
        }
        $directory->social  = $links;
        if ($request->hasFile('logo')) {
            $logo = time() . ' ' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path() . '/uploads/', $logo);
            $directory->logo = $logo;
        }
        $images = [];
        if ($request->company_images) {
            foreach ($request->company_images as $key => $image) {
                $imageName = rand(1, 999) . time() . rand(1, 999) . '.' . $image->extension();
                $image->move(public_path('uploads'), $imageName);
                $images[]['name'] = $imageName;
            }
        }
        $directory->company_images = $images;
        if ($directory->save()) {
            Session::flash('success', 'Business Directory Added Successfully, It is under review');
            return redirect('businessdirectory/add-new-directory');
        }
        Session::flash('error', 'Something went wrong');
        return redirect('businessdirectory/add-new-directory');
    }




    public function getAllUserBusinessDirectories()
    {
        $directories = ModelsBusinessDirectory::where('userId', Auth::user()->id)->get();

        return view('frontend.all-user-business-directories', ['directories' => $directories]);
    }


    public function editDirectory($id)
    {
        $directories = ModelsBusinessDirectory::where('id', $id)->where('userId', Auth::user()->id)->get();
        return sizeof($directories->toArray()) > 0  ?   view('frontend.edit-user-business-directories', ['directories' => $directories]) : redirect('/businessdirectory/all-directories', Session::flash('error', 'Unauthorized Action'));
    }
    public function updateDirectory(Request $request)
    {
        $request->validate([
            'category' => 'required', 'subcategory' => 'required', 'borough' => 'required', 'monday_open' => 'required', 'monday_close' => 'required', 'tuesday_open' => 'required', 'tuesday_close' => 'required', 'wednesday_open' => 'required', 'wednesday_close' => 'required', 'thursday_open' => 'required', 'thursday_close' => 'required', 'friday_open' => 'required', 'friday_close' => 'required', 'saturday_open' => 'required', 'saturday_close' => 'required', 'sunday_open' => 'required', 'company_description' => 'required', 'sunday_close' => 'required', 'holiday_open' => 'required', 'holiday_close' => 'required',
        ]);
        $directory =  ModelsBusinessDirectory::where('id', '=', $request->input('id'))
            ->where('userId', '=', Auth::user()->id)
            ->first();

        $directory->category = $request->input('category');
        $directory->subcategory = $request->input('subcategory');
        if ($request->input('sub_sub_category') !== null) {
            $directory->sub_sub_category = $request->input('sub_sub_category');
        }

        $directory->company_description = $request->input('company_description');
        $directory->borough = $request->input('borough');
        $directory->monday_open = $request->input('monday_open');
        $directory->monday_close = $request->input('monday_close');
        $directory->tuesday_open = $request->input('tuesday_open');
        $directory->tuesday_close = $request->input('tuesday_close');
        $directory->wednesday_open = $request->input('wednesday_open');
        $directory->wednesday_close = $request->input('wednesday_close');
        $directory->thursday_open = $request->input('thursday_open');
        $directory->thursday_close = $request->input('thursday_close');
        $directory->friday_open = $request->input('friday_open');
        $directory->friday_close = $request->input('friday_close');
        $directory->saturday_open = $request->input('saturday_open');
        $directory->saturday_close = $request->input('saturday_close');
        $directory->sunday_open = $request->input('sunday_open');
        $directory->sunday_close = $request->input('sunday_close');
        $directory->holiday_open = $request->input('holiday_open');
        $directory->holiday_close = $request->input('holiday_close');
        $directory->directory_status = 'pending';

        $links = [];
        foreach ($request->social as $link) {
            $links[]['links'] = $link;
        }
        $directory->social  = $links;

        if ($request->hasFile('logo')) {
            $path = public_path('uploads/' . $directory->logo);
            if (File::exists($path)) {
                unlink($path);
            }
            $logo = time() . ' ' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path() . '/uploads/', $logo);
            $directory->logo = $logo;
        }
        $images = [];

        if ($request->hasFile('company_images') && sizeof($request->company_images) > 0) {
            foreach ($directory->company_images as $key => $imageOld) {
                $path = public_path('uploads/' . $imageOld['name']);
                if (File::exists($path)) {
                    unlink($path);
                }
            }
            foreach ($request->company_images as $key => $image) {
                $imageName = rand(1, 999) . time() . rand(1, 999) . '.' . $image->extension();
                $image->move(public_path('uploads/'), $imageName);
                $images[]['name'] = $imageName;
            }
            $directory->company_images = $images;
        }
        if ($directory->update()) {
            Session::flash('success', 'Business Directory Updated Successfully, It is under review');
            return redirect('/businessdirectory/all-directories');
        }
        Session::flash('error', 'Something went wrong');
        return redirect('/businessdirectory/all-directories');
    }

    public function deleteDirectory($id)
    {
        $directory =  ModelsBusinessDirectory::where('id', '=', $id)
            ->where('userId', '=', Auth::user()->id)->first();

        if ($directory) {
            if ($directory->logo !== null) {
                $path = public_path('uploads/' . $directory->logo);
                if (File::exists($path)) {
                    unlink($path);
                }
            }
            if (sizeof($directory->company_images) > 0) {
                foreach ($directory->company_images as $key => $imageOld) {
                    $path = public_path('uploads/' . $imageOld['name']);
                    if (File::exists($path)) {
                        unlink($path);
                    }
                }
            }
            if ($directory->delete()) {
                Session::flash('success', 'Business Directory deleted successfully');
                return redirect('businessdirectory/all-directories');
            } else {
                Session::flash('error', 'Unauthorized Action');
                return  redirect('/businessdirectory/all-directories');
            }
        } else {
            Session::flash('error', 'Unauthorized Action');
            return redirect('/businessdirectory/all-directories');
        }
    }

    public function submitReview(Request $request)
    {
        $request->userId = Auth::user()->id;
        $request->validate(
            [
                'directoryId' => 'required',
                'userId' => 'required',
                // 'userId' => 'required|unique:directory_reviews,userId',
                'name' => 'required',
                'email' => 'required',
                'website' => 'required',
                'review' => 'required',
                'rating' => 'required'

            ]
        );
        $checkUserAlreadyGiveReview = DirectoryReview::where(['directoryId' => $request->directoryId])
            ->where(['userId' => Auth::user()->id])
            ->get()
            ->toArray();

        if (sizeof($checkUserAlreadyGiveReview) === 0) {
            $review =  DirectoryReview::create([
                'userId' => Auth::user()->id,
                'directoryId' => $request->directoryId,
                'website' => $request->website,
                'rating' => $request->rating,
                'review' => $request->review,
            ]);
            if ($review) {
                Session::flash('success', 'Review Submitted successfully');
                return redirect('/businessdirectory/directory/' . $request->directoryId . '#respond');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('/businessdirectory/directory/' . $request->directoryId . '#respond');
        } else {
            Session::flash('error', 'You already Submitted the review on this directory');
            return redirect('/businessdirectory/directory/' . $request->directoryId . '#respond');
        }
    }

    public function submitReply(Request $request)
    {
        $reply = ReviewsReply::create([
            'userId' => Auth::user()->id,
            'directoryId' => $request->directoryId,
            'reviewId' => $request->reviewId,
            'reply' => $request->reply,
        ]);
        if ($reply) {
            Session::flash('success-reply', 'Review Reply submitted successfully');
            return redirect('/businessdirectory/directory/' . $request->directoryId . '#comment-2');
        } else {
            Session::flash('error-reply', 'Something went wrong');
            return redirect('/businessdirectory/directory/' . $request->directoryId . '#comment-2');
        }
    }
















    function getDirectorySearchResults(Request $request){
        if($request->method() === 'GET'){
            return redirect()->route('businessdirectory');
        }
        $directories =  ModelsBusinessDirectory::where('business_directorys.category', 'like', '%'.$request->input('category').'%')
        ->orWhere('user_details.company_name',  'like', '%'.$request->input('keyword').'%')
        ->where('business_directorys.directory_status', 'live')
        ->join('users', 'users.id', '=', 'business_directorys.userId')
        ->join('user_details', 'user_details.userId', '=', 'business_directorys.userId')
        ->distinct()
        ->get(
            [
                'business_directorys.id',
                'business_directorys.category',
                'business_directorys.logo',
                'business_directorys.subcategory',
                'business_directorys.borough',
                'business_directorys.company_images',
                'users.name',
                'users.email',
                'user_details.phone',
                'user_details.company_name',
                'user_details.company_reg_no',
            ]
        );
      foreach($directories as $directory){
          $directory->rating = DirectoryReview::where('directoryId',$directory->id)->avg('rating');
      }

      return view('frontend.searchDirectoryResults', ['directories' => $directories, 'category' => $request->input('category'),'keywords' => $request->input('keyword')]);
    }



function getDirectorySearchResultsByCategory($category){
    $directories =  ModelsBusinessDirectory::where('business_directorys.category', 'like', '%'.substr($category,0,3).'%')
    ->orWhere('business_directorys.category', 'like', '%'.$category.'%')
    ->where('business_directorys.directory_status', 'live')
    ->join('users', 'users.id', '=', 'business_directorys.userId')
    ->join('user_details', 'user_details.userId', '=', 'business_directorys.userId')
    ->distinct()
    ->get(
        [
            'business_directorys.id',
            'business_directorys.category',
            'business_directorys.logo',
            'business_directorys.subcategory',
            'business_directorys.borough',
            'business_directorys.company_images',
            'users.name',
            'users.email',
            'user_details.phone',
            'user_details.company_name',
            'user_details.company_reg_no',
        ]
    );
  foreach($directories as $directory){
      $directory->rating = DirectoryReview::where('directoryId',$directory->id)->avg('rating');
  }

  return view('frontend.searchDirectoryResults', ['directories' => $directories, 'category' => $category]);
}
}


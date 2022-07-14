<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\DesignBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class MagazineDesign extends Controller
{
    public function index()
    {

        $designsBooks = DesignBook::join('adverts', 'adverts.id', '=', 'design_books.advertSize')
            ->join('upcomming_issues', 'upcomming_issues.id', '=', 'design_books.upcomingIssue')
            ->join('users', 'users.id', '=', 'design_books.userId')
            ->get([
                'design_books.id',
                'design_books.logo',
                'design_books.brief_desc',
                'design_books.content',
                'design_books.created_at',
                'design_books.status',
                'adverts.advert_size',
                'adverts.advert_price',
                'adverts.currency',
                'upcomming_issues.issue',
                'users.name',
                'users.email',
            ]);

        // dd($designsBooks);
        return view('backend.magazine-designs', ['designsBooks' => $designsBooks]);
    }

    public function manageMagazineDesign($id,$action){
        switch($action){
            case 'accept':
                {
                    if (DesignBook::find($id)->update([
                        'status' => 'under-review'
                    ])) {
                        Session::flash('success', 'Order Status Updated Successfully');
                        return redirect('admins/magazine-design');
                    }
                    Session::flash('error', 'Something went wrong');
                    return redirect('admins/magazine-design');
                }
                case 'cancel':{
                    if (DesignBook::find($id)->update([
                        'status' => 'cancellled'
                    ])) {
                        Session::flash('success', 'Order Cancelled Successfully');
                        return redirect('admins/magazine-design');
                    }
                    Session::flash('error', 'Something went wrong');
                    return redirect('admins/magazine-design');
                }
                case 'completed':{
                    if (DesignBook::find($id)->update([
                        'status' => 'completed'
                    ])) {
                        Session::flash('success', 'Order Marked as Completed Successfully');
                        return redirect('admins/magazine-design');
                    }
                    Session::flash('error', 'Something went wrong');
                    return redirect('admins/magazine-design');
                }
                case 'remove':{
                    $magazineDesign =  DesignBook::where('id', '=', $id)->first();

                    if ($magazineDesign) {
                        if ($magazineDesign->logo !== null) {
                            $path = public_path('uploads/' . $magazineDesign->logo);
                            if (File::exists($path)) {
                                unlink($path);
                            }
                        }
                        if (sizeof($magazineDesign->images) > 0) {
                            foreach ($magazineDesign->images as $key => $imageOld) {
                                $path = public_path('uploads/' . $imageOld['name']);
                                if (File::exists($path)) {
                                    unlink($path);
                                }
                            }
                        }
                        if ($magazineDesign->delete()) {
                            Session::flash('success', 'Magazine Design deleted successfully');
                            return redirect('/account/magzine-designs/');
                        } else {
                            Session::flash('error', 'Unauthorized Action');
                            return  redirect('/account/magzine-designs/');
                        }
                    } else {
                        Session::flash('error', 'Unauthorized Action');
                        return redirect('/account/magzine-designs/');
                    }
                }

                default:{
                    Session::flash('error', 'Something went wrong');
                    return redirect('admins/magazine-design');
                }
        }
    }
}

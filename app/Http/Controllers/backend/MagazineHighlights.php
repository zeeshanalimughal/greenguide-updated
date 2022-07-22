<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MagazineHighlight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class MagazineHighlights extends Controller
{



    public function index()
    {
        $highlights = MagazineHighlight::all();
        return view('backend.magazine-highlights', compact('highlights'));
    }


    public function addMagazineHighlight(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_name' => 'required',
            'highlight_description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        if ($request->hasFile('image')) {
            $highlight_image = time() . ' ' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/uploads/', $highlight_image);

            $highlight = new  MagazineHighlight();


            $highlight->image = $highlight_image;
            $highlight->title = $request->input('title');
            $highlight->category_name = $request->input('category_name');
            $highlight->description = $request->input('highlight_description');

            if ($highlight->save()) {
                $request->session()->flash('success', 'Magazine Highlight Added Successfully');
                return redirect('/admins/magazine-highlights');
            } else {
                $request->session()->flash('error', 'Something went wrong');
                return redirect('/admins/magazine-highlights');
            }
        }
    }


    public function manageMagazineHighlight($id, $action)
    {

        if ($action === 'delete') {
            $highlight =  MagazineHighlight::where('id', '=', $id)->first();
            if ($highlight) {
                if ($highlight->image !== null) {
                    $path = public_path('uploads/' . $highlight->image);
                    if (File::exists($path)) {
                        unlink($path);
                    }
                }
                if ($highlight->delete()) {
                    Session::flash('success', 'Highlight deleted successfully');
                    return redirect('/admins/magazine-highlights');
                } else {
                    Session::flash('error', 'Unauthorized Action');
                    return  redirect('/admins/magazine-highlights');
                }
            } else {
                Session::flash('error', 'Highlight Not Found');
                return  redirect('/admins/magazine-highlights');
            }
        }
        if ($action === 'activate') {
            if (MagazineHighlight::find($id)->update(['status' => 'active'])) {
                Session::flash('success', 'Highlight Activated Successfully');
                return redirect('admins/magazine-highlights');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('admins/magazine-highlights');
        }
        if ($action === 'deactivate') {
            if (MagazineHighlight::find($id)->update(['status' => 'deactive'])) {
                Session::flash('success', 'Highlight Deactivated Successfully');
                return redirect('admins/magazine-highlights');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('admins/magazine-highlights');
        }
    }


    public function updateMagazineHighlight()
    {
    }
}

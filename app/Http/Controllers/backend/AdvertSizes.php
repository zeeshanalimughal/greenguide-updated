<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdvertSizes extends Controller
{
    public function index()
    {
        return view('backend.advert-sizes',['adverts'=>Advert::all()]);
    }
    public function addAdvertSize(Request $request)
    {
        $request->validate([
            'advert_size' =>'required',
            'advert_price' =>'required',
            'currency' =>'required',
        ]);
         $request->input('advert_price').'+VAT';
        if (Advert::create($request->all())) {
            $request->session()->flash('success', 'New Advert Added Successfully');
            return redirect('admins/adverts');
        }
        $request->session()->flash('error', 'Something went wrong');
        return redirect('admins/adverts');
    }
    public function advertAction($id, $action){
       if($action === 'delete'){
        if (Advert::where('id', $id)->delete()) {
          Session::flash('success', 'Advert Deleted Successfully');
            return redirect('admins/adverts');
        }
        Session::flash('error', 'Something went wrong');
        return redirect('admins/adverts');
       }
       Session::flash('error', 'Something went wrong');
       return redirect('admins/adverts');
    }
}

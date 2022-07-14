<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\AdvertDesign as ModelsAdvertDesign;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdvertDesign extends Controller
{
    public function getAllAdvertDesigns()
    {
        $adverts = ModelsAdvertDesign::join('users', 'users.id', '=', 'advert_designs.userId')
            ->join('upcomming_issues', 'upcomming_issues.id', '=', 'advert_designs.borough')
            ->join('boroughs', 'boroughs.id', '=', 'advert_designs.borough')
            ->orderBy('id', 'DESC')
            ->get([
                'advert_designs.id',
                'advert_designs.advertSize',
                'advert_designs.quantity',
                'advert_designs.status',
                'advert_designs.created_at',
                'users.name',
                'users.email',
                'boroughs.borough',
                'upcomming_issues.issue',
            ]);
        for ($i = 0; $i < sizeof($adverts); $i++) {
            $advertSizes = [];
            $price = 0;
            $currency = '';
            for ($j = 0; $j < sizeof($adverts[$i]['advertSize']); $j++) {
                $sizes  =  Advert::find($adverts[$i]['advertSize'][$j]);
                array_push($advertSizes, $sizes->advert_size);
                $price += $sizes->advert_price;
                $currency = $sizes->currency;
            }
            $adverts[$i]['advertSize'] = $advertSizes;
            $adverts[$i]['amount'] = $price . ' ' . $currency;
        }
        return view('backend.advert-designs', ['adverts' => $adverts]);
    }

    public function manageAdvertDesigns($id, $action)
    {

        switch ($action) {
            case 'cancel': {
                    if (ModelsAdvertDesign::find($id)->update([
                        'status' => 'cancellled'
                    ])) {
                        Session::flash('success', 'Order Cancelled Successfully');
                        return redirect('admins/advert-design-book');
                    }
                    Session::flash('error', 'Something went wrong');
                    return redirect('admins/advert-design-book');
                }
            case 'completed': {
                    if (ModelsAdvertDesign::find($id)->update([
                        'status' => 'completed'
                    ])) {
                        Session::flash('success', 'Order Marked as Completed Successfully');
                        return redirect('admins/advert-design-book');
                    }
                    Session::flash('error', 'Something went wrong');
                    return redirect('admins/advert-design-book');
                }
            case 'remove': {
                    $advertDesign =  ModelsAdvertDesign::where('id', '=', $id)->first();
                    if ($advertDesign->delete()) {
                        Session::flash('success', 'Order deleted successfully');
                        return redirect('/account/magzine-designs/');
                    } else {
                        Session::flash('error', 'Unauthorized Action');
                        return  redirect('/account/magzine-designs/');
                    }
                }
            default: {
                    Session::flash('error', 'Something went wrong');
                    return redirect('admins/advert-design-book');
                }
        }
    }
}

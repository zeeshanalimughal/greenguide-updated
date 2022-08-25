<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\AdvertDesign;
use App\Models\Borough;
use App\Models\DesignBook;
use App\Models\General_Setting;
use App\Models\Pages\AdvertDesign as PagesAdvertDesign;
use App\Models\pages\Advertise as PagesAdvertise;
use App\Models\pages\AdvertiseInMagazine;
use App\Models\pages\LinksCard;
use App\Models\UpcommingIssues;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\WebsiteForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;

class Advertise extends Controller
{
    function index()
    {
        $advertise = PagesAdvertise::where('id', 1)->get();
        return view('frontend.advertise', ['advertise' => $advertise,'links'=>LinksCard::where('id',1)->get(),'page'=>AdvertiseInMagazine::find(1),'settings'=>General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three']),'issues' => UpcommingIssues::all()]);
    }
    function advertise_home()
    {
        return view('frontend.advertise-home', ['issues' => UpcommingIssues::all(),'settings'=>General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three'])]);
    }


    function archives()
    {
        return view('frontend.archives', ['issues' => UpcommingIssues::all(),'links'=>LinksCard::where('id',1)->get(),'settings'=>General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three'])]);
    }

    public function getMagazineInAdvertisePage(){
        $advertise = PagesAdvertise::where('id', 1)->get();
        return view('frontend.advertise-in-magazine',['advertise' => $advertise, 'issues' => UpcommingIssues::all(),'links'=>LinksCard::where('id',1)->get(),'settings'=>General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three']),'page'=>AdvertiseInMagazine::find(1)]);
    }

    function advert_design_book()
    {
        if (Auth::check()) {
            $userDetails = UserDetails::where('userId', Auth::user()->id)
                ->first();
            return view('frontend.magzine-design-book', ['adverts' => Advert::all(), 'userDetails' => $userDetails, 'issues' => UpcommingIssues::all(), 'adverts_sizes' => Advert::all(),'settings'=>General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three']),'form'=>WebsiteForm::where('link','magzine-design-book#book__addvertise')->get()]);
        } else {
            return view('frontend.magzine-design-book', ['adverts' => Advert::all(), 'issues' => UpcommingIssues::all(), 'adverts_sizes' => Advert::all(),'settings'=>General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three']),'form'=>WebsiteForm::where('link','magzine-design-book#book__addvertise')->get()]);
        }
    }




    public function createUserDetails(array $data, $id)
    {
        return UserDetails::create([
            'userId' => $id,
            'company_name' => $data['company_name'],
            'company_reg_no' => $data['company_reg_no'],
            'phone' => $data['contact_phone'],
            'charity_number' => $data['charity_number'],
        ]);
    }



    public function submitDesign(Request $request)
    {

        $request->validate([
            'advertSize' => 'required', 'upcomingIssue' => 'required', 'brief_desc' => 'required', 'content' => 'required', 'logo' => 'required', 'images' => 'required', 'website' => 'required', 'fb' => 'required', 'ins' => 'required', 'tw' => 'required', 'yt' => 'required', 'monday_open' => 'required', 'monday_close' => 'required', 'tuesday_open' => 'required', 'tuesday_close' => 'required', 'wednesday_open' => 'required', 'wednesday_close' => 'required', 'thursday_open' => 'required', 'thursday_close' => 'required', 'friday_open' => 'required', 'friday_close' => 'required', 'saturday_open' => 'required', 'saturday_close' => 'required', 'sunday_open' => 'required', 'sunday_close' => 'required', 'holiday_open' => 'required', 'holiday_close' => 'required', 'contact_phone' => 'required', 'contact_name' => 'required', 'contact_email' => 'required'
        ]);

        // dd(($request->input('check_account')));
        $userAccountId = 0;
        if (!Auth::check()) {
            if ($request->input('check_account') !== null && $request->input('check_account') === "1") {
                $user =   User::create([
                    'name' => $request->input('contact_name'),
                    'email' => $request->input('contact_email'),
                    'password' => Hash::make($request->input('password'))
                ]);
                if ($user) {
                    $userAccountId = $user->id;
                    $this->createUserDetails($request->all(), $user->id);
                }
            } else {
                $user =   User::create([
                    'name' => $request->input('contact_name'),
                    'email' => $request->input('contact_email'),
                    'password' => ''
                ]);
                if ($user) {
                    $userAccountId = $user->id;
                    $this->createUserDetails($request->all(), $user->id);
                }
            }
        }


        $designBook = new DesignBook();


        $designBook->userId = Auth::check() ? Auth::user()->id : $userAccountId;
        $designBook->advertSize = $request->input('advertSize');
        $designBook->upcomingIssue = $request->input('upcomingIssue');

        $designBook->brief_desc = $request->input('brief_desc');
        $designBook->content = $request->input('content');


        $designBook->monday_open = $request->input('monday_open');
        $designBook->monday_close = $request->input('monday_close');
        $designBook->tuesday_open = $request->input('tuesday_open');
        $designBook->tuesday_close = $request->input('tuesday_close');
        $designBook->wednesday_open = $request->input('wednesday_open');
        $designBook->wednesday_close = $request->input('wednesday_close');
        $designBook->thursday_open = $request->input('thursday_open');
        $designBook->thursday_close = $request->input('thursday_close');
        $designBook->friday_open = $request->input('friday_open');
        $designBook->friday_close = $request->input('friday_close');
        $designBook->saturday_open = $request->input('saturday_open');
        $designBook->saturday_close = $request->input('saturday_close');
        $designBook->sunday_open = $request->input('sunday_open');
        $designBook->sunday_close = $request->input('sunday_close');
        $designBook->holiday_open = $request->input('holiday_open');
        $designBook->holiday_close = $request->input('holiday_close');

        $designBook->website = $request->input('website');
        $designBook->fb = $request->input('fb');
        $designBook->ins = $request->input('ins');
        $designBook->tw = $request->input('tw');
        $designBook->yt = $request->input('yt');








        if ($request->hasFile('logo')) {
            $logo = time() . ' ' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path() . '/uploads/', $logo);
            $designBook->logo = $logo;
        }

        $imagesArray = [];
        if ($request->images) {
            foreach ($request->images as $key => $image) {
                $imageName = rand(1, 999) . time() . rand(1, 999) . '.' . $image->extension();
                $image->move(public_path('uploads'), $imageName);
                $imagesArray[]['name'] = $imageName;
            }
        }
        $designBook->images = $imagesArray;

        if ($designBook->save()) {
            Session::flash('success', 'Green Guide magazine Added Successfully, It is under review');
            return redirect('/magzine-design-book#book__addvertise');
        }
        Session::flash('error', 'Something went wrong');
        return redirect('/magzine-design-book#book__addvertise');
    }


    public function getAllUserMagazineDesigns()
    {
        $designsBooks = DesignBook::where('userId', Auth::user()->id)
            ->join('adverts', 'adverts.id', '=', 'design_books.advertSize')
            ->join('upcomming_issues', 'upcomming_issues.id', '=', 'design_books.upcomingIssue')
            ->get([
                'design_books.id',
                'design_books.logo',
                'design_books.brief_desc',
                'design_books.created_at',
                'design_books.status',
                'adverts.advert_size',
                'adverts.advert_price',
                'adverts.currency',
                'upcomming_issues.issue',
            ]);

        return view('frontend.all-user-magzine-designs', ['designsBooks' => $designsBooks]);
    }

    public function manageUserMagazineDesigns($id, $action)
    {
        if ($action === 'delete') {
            $magazineDesign =  DesignBook::where('id', '=', $id)
                ->where('userId', '=', Auth::user()->id)->first();

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

        if ($action === 'edit') {

            $magazineDesign = DesignBook::where('id', $id)->where('userId', Auth::user()->id)
                ->get();
            $UpcommingIssues = UpcommingIssues::all();
            $AdvertSize = Advert::all();

            return sizeof($magazineDesign->toArray()) > 0  ?   view('frontend.edit-user-magazine-design', ['magazineDesign' => $magazineDesign, 'adverts_sizes' => $AdvertSize, 'issues' => $UpcommingIssues,'settings'=>General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three'])]) : redirect('/account/magzine-designs/', Session::flash('error', 'Unauthorized Action'));
        }
    }

    public function updateUserMagazineDesign(Request $request)
    {
        $request->validate([
            'advertSize' => 'required', 'upcomingIssue' => 'required', 'brief_desc' => 'required', 'content' => 'required', 'website' => 'required', 'fb' => 'required', 'ins' => 'required', 'tw' => 'required', 'yt' => 'required', 'monday_open' => 'required', 'monday_close' => 'required', 'tuesday_open' => 'required', 'tuesday_close' => 'required', 'wednesday_open' => 'required', 'wednesday_close' => 'required', 'thursday_open' => 'required', 'thursday_close' => 'required', 'friday_open' => 'required', 'friday_close' => 'required', 'saturday_open' => 'required', 'saturday_close' => 'required', 'sunday_open' => 'required', 'sunday_close' => 'required', 'holiday_open' => 'required', 'holiday_close' => 'required',
        ]);

        $designBook =  DesignBook::find($request->id);
        $designBook->advertSize = $request->input('advertSize');
        $designBook->upcomingIssue = $request->input('upcomingIssue');
        $designBook->brief_desc = $request->input('brief_desc');
        $designBook->content = $request->input('content');
        $designBook->monday_open = $request->input('monday_open');
        $designBook->monday_close = $request->input('monday_close');
        $designBook->tuesday_open = $request->input('tuesday_open');
        $designBook->tuesday_close = $request->input('tuesday_close');
        $designBook->wednesday_open = $request->input('wednesday_open');
        $designBook->wednesday_close = $request->input('wednesday_close');
        $designBook->thursday_open = $request->input('thursday_open');
        $designBook->thursday_close = $request->input('thursday_close');
        $designBook->friday_open = $request->input('friday_open');
        $designBook->friday_close = $request->input('friday_close');
        $designBook->saturday_open = $request->input('saturday_open');
        $designBook->saturday_close = $request->input('saturday_close');
        $designBook->sunday_open = $request->input('sunday_open');
        $designBook->sunday_close = $request->input('sunday_close');
        $designBook->holiday_open = $request->input('holiday_open');
        $designBook->holiday_close = $request->input('holiday_close');
        $designBook->website = $request->input('website');
        $designBook->fb = $request->input('fb');
        $designBook->ins = $request->input('ins');
        $designBook->tw = $request->input('tw');
        $designBook->yt = $request->input('yt');


        $designBook->status = 'in-progress';

        if ($request->hasFile('logo')) {
            $path = public_path('uploads/' . $designBook->logo);
            if (File::exists($path)) {
                unlink($path);
            }
            $logo = time() . ' ' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path() . '/uploads/', $logo);
            $designBook->logo = $logo;
        }


        $imagesArray = [];

        if ($request->hasFile('images') && sizeof($request->images) > 0) {
            foreach ($designBook->images as $key => $imageOld) {
                $path = public_path('uploads/' . $imageOld['name']);
                if (File::exists($path)) {
                    unlink($path);
                }
            }
            foreach ($request->images as $key => $image) {
                $imageName = rand(1, 999) . time() . rand(1, 999) . '.' . $image->extension();
                $image->move(public_path('uploads/'), $imageName);
                $imagesArray[]['name'] = $imageName;
            }
            $designBook->images = $imagesArray;
        }
        if ($designBook->update()) {
            Session::flash('success', 'Green Guide magazine Updated Successfully, It is under review');
            return redirect('/account/magzine-designs/');
        }
        Session::flash('error', 'Something went wrong');
        return redirect('/account/magzine-designs/');
    }




























    // ADVERT

    public function advert_book()
    {
        if (Auth::check()) {
            $userDetails = UserDetails::where('userId', Auth::user()->id)
                ->first();
            return view('frontend.advert-design-book', ['adverts' => Advert::all(), 'userDetails' => $userDetails, 'issues' => UpcommingIssues::all(), 'adverts_sizes' => Advert::all(), 'borough' => Borough::all(),'settings'=>General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three']),'form'=>WebsiteForm::where('link','advert-design-book/#book__addvertise')->get(),'page'=>PagesAdvertDesign::find(1),'links'=>LinksCard::where('id',1)->get(),]);
        } else {

            return view('frontend.advert-design-book', ['adverts' => Advert::all(), 'issues' => UpcommingIssues::all(), 'adverts_sizes' => Advert::all(), 'borough' => Borough::all(),'settings'=>General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three']),'form'=>WebsiteForm::where('link','advert-design-book/#book__addvertise')->get(),'page'=>PagesAdvertDesign::find(1),'links'=>LinksCard::where('id',1)->get(),]);
        }
    }




    public function submitAdvertDesign(Request $request)
    {

        $request->validate([
            'upcomingIssue' => 'required',
            'borough' => 'required',
            'advertSize' => 'required',
            'quantity' => 'required',
            'contact_phone' => 'required',
            'contact_name' => 'required',
            'contact_email' => 'required'
        ]);

        $userAccountId = 0;
        if (!Auth::check()) {
            if ($request->input('check_account') !== null && $request->input('check_account') === "1") {
                $user =   User::create([
                    'name' => $request->input('contact_name'),
                    'email' => $request->input('contact_email'),
                    'password' => Hash::make($request->input('password'))
                ]);
                if ($user) {
                    $userAccountId = $user->id;
                    $this->createUserDetails($request->all(), $user->id);
                }
            } else {
                $user =   User::create([
                    'name' => $request->input('contact_name'),
                    'email' => $request->input('contact_email'),
                    'password' => ''
                ]);
                if ($user) {
                    $userAccountId = $user->id;
                    $this->createUserDetails($request->all(), $user->id);
                }
            }
        }



        $advert = AdvertDesign::create([
            'userId' => Auth::check() ? Auth::user()->id : $userAccountId,
            'upcomingIssue' => $request->upcomingIssue,
            'borough' => $request->borough,
            'advertSize' => $request->advertSize,
            'quantity' => $request->quantity,
            'status' => 'processing',
        ]);
        if ($advert) {
            Session::put('success', 'Advert order has been submitted successfully');
            return redirect('advert-design-book/#book__addvertise');
        }
        Session::put('error', 'Something went wrong');
        return redirect('advert-design-book/#book__addvertise');
    }

    public function getAdvertPriceTotal($id)
    {
        $data = Advert::where('id', $id)->get('advert_price');
        return response()->json([$data]);
    }




    public function getAllAdvertDesigns()
    {

        $adverts = AdvertDesign::where('userId', Auth::user()->id)
            ->join('users', 'users.id', '=', 'advert_designs.userId')
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
            $price = 0;
            $currency = '';
            $advertSizes = [];
            for ($j = 0; $j < sizeof($adverts[$i]['advertSize']); $j++) {
                $sizes  =  Advert::find($adverts[$i]['advertSize'][$j]);
                array_push($advertSizes, $sizes->advert_size);
                $price += $sizes->advert_price;
                $currency = $sizes->currency;
            }
            $adverts[$i]['advertSize'] = $advertSizes;
            $adverts[$i]['amount'] = $price . ' ' . $currency;
        }
        return view('frontend.all-user-advert-designs', ['adverts' => $adverts]);
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Faq;
use App\Models\HomeGallery;
use App\Models\AdvertiseCarousel;
use App\Models\pages\Home;
use App\Models\pages\About;
use App\Models\pages\AdvertDesign;
use App\Models\pages\Advertise;
use App\Models\pages\AdvertiseInMagazine;
use App\Models\pages\Archive;
use App\Models\pages\Businessdirectory;
use App\Models\pages\CommunityGrowth;
use App\Models\pages\Contact;
use App\Models\pages\Feedback;
use App\Models\pages\GreenInitiative;
use App\Models\pages\Jobs;
use App\Models\pages\LinksCard;
use App\Models\pages\MagazineCompetition;
use App\Models\pages\MagazineGiveaway;
use App\Models\WebsiteForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class Pages extends Controller
{
    public  function pages()
    {
        // dd($page)
        return view('backend.pages-settings');
    }

    public function getHomePage()
    {
        $page = Home::where('id', 1)->get();
        return view('backend.pages.home-page-form', compact('page'));
    }
    public function page_home(Request $request)
    {
        $request->validate([
            'hero_image' => 'mimes:png,jpg,jpeg,webp',
            'hero_title1' => 'required',
            'hero_title2' => 'required',
            'hero_animated_title' => 'required',
            'post_category_title1' => 'required',
            'post_category_title2' => 'required',
            'post_category_title3' => 'required',
            'highlight_title' => 'required',
            'highlight_link_text' => 'required',
            'post_category_image1' => 'mimes:png,jpg,jpeg,webp',
            'post_category_image2' => 'mimes:png,jpg,jpeg,webp',
            'post_category_image3' => 'mimes:png,jpg,jpeg,webp',


            'box1_title' => 'required',
            // 'box1_image' => 'mimes:png,jpg,jpeg',
            'box2_title' => 'required',
            // 'box2_image' => 'mimes:png,jpg,jpeg',
            'box3_title' => 'required',
            // 'box3_image' => 'mimes:png,jpg,jpeg',
            'box4_title' => 'required',
            // 'box4_image' => 'mimes:png,jpg,jpeg',
            'box5_title' => 'required',
            // 'box5_image' => 'mimes:png,jpg,jpeg',
            'dir_title' => 'required',
            'dir_desc' => 'required',
        ]);


        $home = Home::find(1);

        if ($request->hasFile('hero_image')) {

            if ($home->hero_image !== '') {
                $imagePath = public_path('/uploads/' . $home->hero_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $hero_image = time() . '-' . $request->file('hero_image')->getClientOriginalName();
            $request->file('hero_image')->move(public_path() . '/uploads/', $hero_image);
            $home->hero_image = $hero_image;
        }


        if ($request->hasFile('post_category_image1')) {
            if ($home->post_category_image1 !== '') {
                $imagePath = public_path('/uploads/' . $home->post_category_image1);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $post_category_image1 = time() . '-' . $request->file('post_category_image1')->getClientOriginalName();
            $request->file('post_category_image1')->move(public_path() . '/uploads/', $post_category_image1);
            $home->post_category_image1 = $post_category_image1;
        }

        if ($request->hasFile('post_category_image2')) {
            if ($home->post_category_image2 !== '') {
                $imagePath = public_path('/uploads/' . $home->post_category_image2);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $post_category_image2 = time() . '-' . $request->file('post_category_image2')->getClientOriginalName();
            $request->file('post_category_image2')->move(public_path() . '/uploads/', $post_category_image2);
            $home->post_category_image2 = $post_category_image2;
        }

        if ($request->hasFile('post_category_image3')) {
            if ($home->post_category_image3 !== '') {
                $imagePath = public_path('/uploads/' . $home->post_category_image3);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $post_category_image3 = time() . '-' . $request->file('post_category_image3')->getClientOriginalName();
            $request->file('post_category_image3')->move(public_path() . '/uploads/', $post_category_image3);
            $home->post_category_image3 = $post_category_image3;
        }

        $home->b1_title = $request->input('box1_title');
        $home->b2_title = $request->input('box2_title');
        $home->b3_title = $request->input('box3_title');
        $home->b4_title = $request->input('box4_title');
        $home->b5_title = $request->input('box5_title');
        $home->dir_title = $request->input('dir_title');
        $home->dir_desc = $request->input('dir_desc');


        $home->hero_title1 = $request->input('hero_title1');
        $home->hero_title2 = $request->input('hero_title2');
        $home->hero_animated_title = $request->input('hero_animated_title');

        $home->highlight_title = $request->input('highlight_title');
        $home->highlight_link_text = $request->input('highlight_link_text');

        $home->post_category_title1 = $request->input('post_category_title1');
        $home->post_category_title2 = $request->input('post_category_title2');
        $home->post_category_title3 = $request->input('post_category_title3');

        $res  = $home->update();
        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/home');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/home');
        }
    }





    // About Page
    public function getAboutPage()
    {
        $page = About::where('id', 1)->get();
        return view('backend.pages.about-page-form', compact('page'));
    }
    public function page_about(Request $request)
    {
        $request->validate([
            'ab_title' => 'required',
            'ab_desc1' => 'required',
            'ab_desc2' => 'required',
            'ab_box1' => 'required',
            'ab_box2' => 'required',
            'ab_box3' => 'required',
            'ab_company' => 'required',
            'ab_company_qt' => 'required',
            'ab_image' => 'mimes:png,jpg,jpeg',
        ]);
        $data  = About::find(1);

        $data->ab_title = $request->input('ab_title');
        $data->ab_desc1 = $request->input('ab_desc1');
        $data->ab_desc2 = $request->input('ab_desc2');
        $data->ab_box1 = $request->input('ab_box1');
        $data->ab_box2 = $request->input('ab_box2');
        $data->ab_box3 = $request->input('ab_box3');
        $data->ab_company = $request->input('ab_company');
        $data->ab_company_qt = $request->input('ab_company_qt');

        if ($request->hasFile('ab_image')) {
            $imagePath = public_path('/uploads/' . $data->ab_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $ab_image = time() . ' ' . $request->file('ab_image')->getClientOriginalName();
            $request->file('ab_image')->move(public_path() . '/uploads/', $ab_image);
            $data->ab_image = $ab_image;
        }

        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/about');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/about');
        }
    }










    // Contact Page
    public function getContactPage()
    {
        $page = Contact::where('id', 1)->get();

        return view('backend.pages.contact-page-form', compact('page'));
    }


    public function page_contact(Request $request)
    {
        $request->validate([
            'contact_title' => 'required',
            'contact_sub_title' => 'required',
            'contact_team_title' => 'required',
            'contact_team_desc' => 'required',

            'finance_email' => 'required',
            'finance_phone' => 'required',
            'operations_email' => 'required',
            'operations_phone' => 'required',
            'sales_email' => 'required',
            'sales_phone' => 'required',
            'design_email' => 'required',
            'design_phone' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'hr_email' => 'required',
            'hr_phone' => 'required',

            'contact_hero_image' => 'mimes:png,jpg,jpeg',
        ]);
        $data  = Contact::find(1);

        $data->contact_title = $request->input('contact_title');
        $data->contact_sub_title = $request->input('contact_sub_title');
        $data->contact_team_title = $request->input('contact_team_title');

        $data->finance_email = $request->input('finance_email');
        $data->finance_phone = $request->input('finance_phone');
        $data->operations_email = $request->input('operations_email');
        $data->operations_phone = $request->input('operations_phone');
        $data->sales_email = $request->input('sales_email');
        $data->sales_phone = $request->input('sales_phone');
        $data->design_email = $request->input('design_email');
        $data->design_phone = $request->input('design_phone');
        $data->customer_email = $request->input('customer_email');
        $data->customer_phone = $request->input('customer_phone');
        $data->hr_email = $request->input('hr_email');
        $data->hr_phone = $request->input('hr_phone');



        if ($request->hasFile('contact_hero_image')) {
            $imagePath = public_path('/uploads/' . $data->contact_hero_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }

            $contact_hero_image = time() . ' ' . $request->file('contact_hero_image')->getClientOriginalName();
            $request->file('contact_hero_image')->move(public_path() . '/uploads/', $contact_hero_image);
            $data->contact_hero_image = $contact_hero_image;
        }

        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/contact');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/contact');
        }
    }








    public function getAdvertisePage()
    {
        $page = Advertise::where('id', 1)->get();

        return view('backend.pages.advertise-page-form', ['page' => $page]);
    }


    public function page_advertise(Request $request)
    {
        // dd($request->add_services_images);
        $request->validate([
            'ad_title' => 'required',
            'ad_subtitle' => 'required',
            'ad_sec2_heading' => 'required',
            'ad_sec2_desc' => 'required',
            'ad_pathway_heading' => 'required',
            'ad_pathway_desc' => 'required',
            'add_service_title' => 'required',
            'ad_service_desc' => 'required',
            'ad_benifits_title' => 'required',
            'ad_benifits' => 'required',
            'add_prices_heading' => 'required',
            'ad_prices_desc' => 'required',
            'add_upcomming_issue_content' => 'required',
            'add_booking_title' => 'required',
            'add_booking_desc' => 'required',
            'add_further_info_text' => 'required',
            'add_hero_image' => 'mimes:png,jpg,jpeg,webp',
            'ad_sec2_image1' => 'mimes:png,jpg,jpeg,webp',
            'ad_sec2_image2' => 'mimes:png,jpg,jpeg,webp',
            'ad_pathway_image' => 'mimes:png,jpg,jpeg,webp',
            'add_further_info_image' => 'mimes:png,jpg,jpeg,webp',
            'add_carusel_bg_image' => 'mimes:png,jpg,jpeg,webp',
            'add_services_images[]' => 'mimes:png,jpg,jpeg,webp',
        ]);
        $data  = Advertise::find(1);

        $data->ad_title = $request->input('ad_title');
        $data->ad_subtitle = $request->input('ad_subtitle');
        $data->ad_sec2_heading = $request->input('ad_sec2_heading');
        $data->ad_sec2_desc = $request->input('ad_sec2_desc');
        $data->ad_pathway_heading = $request->input('ad_pathway_heading');
        $data->ad_pathway_desc = $request->input('ad_pathway_desc');
        $data->add_service_title = $request->input('add_service_title');
        $data->ad_service_desc = $request->input('ad_service_desc');
        $data->ad_benifits_title = $request->input('ad_benifits_title');
        $data->ad_benifits = $request->input('ad_benifits');
        $data->add_prices_heading = $request->input('add_prices_heading');
        $data->ad_prices_desc = $request->input('ad_prices_desc');
        $data->add_booking_title = $request->input('add_booking_title');
        $data->add_booking_desc = $request->input('add_booking_desc');
        $data->add_upcomming_issue_content = $request->input('add_upcomming_issue_content');
        $data->add_further_info_text = $request->input('add_further_info_text');





        if ($request->hasFile('add_services_images')) {
            if ($data->add_services_images && sizeof($data->add_services_images) > 0) {
                foreach ($data->add_services_images as $oldImage) {
                    $imagePath = public_path('/uploads/' . $oldImage['name']);
                    if (File::exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }
            $imagesArray = [];
            if ($request->add_services_images) {
                foreach ($request->add_services_images as $key => $image) {
                    $imageName = rand(1, 999) . time() . rand(1, 999) . '.' . $image->extension();
                    $image->move(public_path('uploads'), $imageName);
                    $imagesArray[]['name'] = $imageName;
                }
            }
            $data->add_services_images = $imagesArray;
        }





        if ($request->hasFile('add_carusel_bg_image')) {
            if ($data->add_carusel_bg_image) {
                $imagePath = public_path('/uploads/' . $data->add_carusel_bg_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $add_carusel_bg_image = time() . ' ' . $request->file('add_carusel_bg_image')->getClientOriginalName();
            $request->file('add_carusel_bg_image')->move(public_path() . '/uploads/', $add_carusel_bg_image);
            $data->add_carusel_bg_image = $add_carusel_bg_image;
        }

        if ($request->hasFile('add_further_info_image')) {
            if ($data->add_further_info_image) {
                $imagePath = public_path('/uploads/' . $data->add_further_info_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $add_further_info_image = time() . ' ' . $request->file('add_further_info_image')->getClientOriginalName();
            $request->file('add_further_info_image')->move(public_path() . '/uploads/', $add_further_info_image);
            $data->add_further_info_image = $add_further_info_image;
        }


        if ($request->hasFile('add_hero_image')) {
            if ($data->add_hero_image) {
                $imagePath = public_path('/uploads/' . $data->add_hero_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $add_hero_image = time() . ' ' . $request->file('add_hero_image')->getClientOriginalName();
            $request->file('add_hero_image')->move(public_path() . '/uploads/', $add_hero_image);
            $data->add_hero_image = $add_hero_image;
        }



        if ($request->hasFile('ad_sec2_image1')) {
            if ($data->ad_sec2_image1 !== '') {
                $imagePath = public_path('/uploads/' . $data->ad_sec2_image1);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $ad_sec2_image1 = time() . ' ' . $request->file('ad_sec2_image1')->getClientOriginalName();
            $request->file('ad_sec2_image1')->move(public_path() . '/uploads/', $ad_sec2_image1);
            $data->ad_sec2_image1 = $ad_sec2_image1;
        }

        if ($request->hasFile('ad_sec2_image2')) {
            if ($data->ad_sec2_image2 !== '') {
                $imagePath = public_path('/uploads/' . $data->ad_sec2_image2);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $ad_sec2_image2 = time() . ' ' . $request->file('ad_sec2_image2')->getClientOriginalName();
            $request->file('ad_sec2_image2')->move(public_path() . '/uploads/', $ad_sec2_image2);
            $data->ad_sec2_image2 = $ad_sec2_image2;
        }

        if ($request->hasFile('ad_pathway_image')) {
            if ($data->ad_pathway_image !== '') {
                $imagePath = public_path('/uploads/' . $data->ad_pathway_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $ad_pathway_image = time() . ' ' . $request->file('ad_pathway_image')->getClientOriginalName();
            $request->file('ad_pathway_image')->move(public_path() . '/uploads/', $ad_pathway_image);
            $data->ad_pathway_image = $ad_pathway_image;
        }




        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/advertise');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/advertise');
        }
    }






    public function getAdvertiseCarouselPage()
    {

        return view('backend.pages.advertise-carousel', ['galleryData' => AdvertiseCarousel::all()]);
    }


    public function addAdvertiseCarousel(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:png,jpg,jpeg,webp',
        ]);

        if ($request->hasFile('image')) {
            $carousel_image = time() . ' ' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/uploads/', $carousel_image);

            $carousel = new  AdvertiseCarousel();
            $carousel->image = $carousel_image;
            $carousel->title = $request->input('title');

            if ($carousel->save()) {
                $request->session()->flash('success', 'Carousel Added Successfully');
                return redirect('/admins/pages/advertise-carousel');
            } else {
                $request->session()->flash('error', 'Something went wrong');
                return redirect('/admins/pages/advertise-carousel');
            }
        }
    }




    public function manageAdvertiseCarousel($id, $action)
    {

        $gallery =  AdvertiseCarousel::find($id);
        if ($action === 'delete') {
            if ($gallery) {
                if ($gallery->image !== '') {

                    $imgPath = public_path('/uploads/' . $gallery->image);
                    if (File::exists($imgPath)) {
                        unlink($imgPath);
                    }
                }
                if ($gallery->delete()) {
                    Session::flash('success', 'Carousel deleted Successfully');
                    return redirect('/admins/pages/advertise-carousel');
                }
                Session::flash('error', 'Something went wrong');
                return redirect('/admins/pages/advertise-carousel');
            }
        }

        if ($action === 'edit') {
            return view('backend.pages.edit-advertise-carousel', ['gallery' => $gallery]);
        }
    }


    public function updateAdvertiseCarousel(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:png,jpg,jpeg,webp',
        ]);
        $carousel  = AdvertiseCarousel::find($request->input('id'));
        if ($carousel) {
            if ($request->hasFile('image')) {
                if ($carousel->image !== null) {
                    $imagePath = public_path('/uploads/' . $carousel->image);
                    if (File::exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
                $image = time() . ' ' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path() . '/uploads/', $image);
                $carousel->image = $image;
            }
            $carousel->title = $request->input('title');
            $res =  $carousel->update();

            if ($res) {
                $request->session()->flash('success', 'Updated Successfully');
                return redirect('/admins/pages/advertise-carousel');
            } else {
                $request->session()->flash('error', 'Something went wrong');
                return redirect('/admins/pages/advertise-carousel');
            }
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/advertise-carousel');
        }
    }


    public function getBusinessdirectoryPage()
    {
        $page = Businessdirectory::where('id', 1)->get();
        return view('backend.pages.business-directory-page', compact('page'));
    }




    public function page_businessdirectory(Request $request)
    {
        $request->validate([
            'bd_title' => 'required',
            'bd_cat_title' => 'required',
            'bd_cat_desc' => 'required',
            'bd_sec3_title' => 'required',
            'sec2_title' => 'required',
            'sec2_desc' => 'required',
            'bd_sec3_desc' => 'required',
            'bd_sec4_title' => 'required',
            'bd_sec4_desc' => 'required',
            'bd_hero_image' => 'mimes:png,jpg,jpeg,webp',
            'bd_sec3_image' => 'mimes:png,jpg,jpeg,webp',
            'sec2_image' => 'mimes:png,jpg,jpeg,webp',
        ]);
        $data  = Businessdirectory::find(1);

        $data->bd_title = $request->input('bd_title');
        $data->bd_cat_title = $request->input('bd_cat_title');
        $data->bd_cat_desc = $request->input('bd_cat_desc');
        $data->bd_sec3_title = $request->input('bd_sec3_title');
        $data->sec2_title = $request->input('sec2_title');
        $data->sec2_desc = $request->input('sec2_desc');
        $data->bd_sec3_desc = $request->input('bd_sec3_desc');
        $data->bd_sec4_title = $request->input('bd_sec4_title');
        $data->bd_sec4_desc = $request->input('bd_sec4_desc');


        if ($request->hasFile('bd_hero_image')) {
            $imagePath = public_path('/uploads/' . $data->bd_hero_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }

            $bd_hero_image = time() . ' ' . $request->file('bd_hero_image')->getClientOriginalName();
            $request->file('bd_hero_image')->move(public_path() . '/uploads/', $bd_hero_image);
            $data->bd_hero_image = $bd_hero_image;
        }

        if ($request->hasFile('sec2_image')) {
            $imagePath = public_path('/uploads/' . $data->sec2_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }

            $sec2_image = time() . ' ' . $request->file('sec2_image')->getClientOriginalName();
            $request->file('sec2_image')->move(public_path() . '/uploads/', $sec2_image);
            $data->sec2_image = $sec2_image;
        }

        if ($request->hasFile('bd_sec3_image')) {
            $imagePath = public_path('/uploads/' . $data->bd_sec3_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $bd_sec3_image = time() . ' ' . $request->file('bd_sec3_image')->getClientOriginalName();
            $request->file('bd_sec3_image')->move(public_path() . '/uploads/', $bd_sec3_image);
            $data->bd_sec3_image = $bd_sec3_image;
        }

        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/businessdirectory');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/businessdirectory');
        }
    }











    public function getGreenInitiativePage()
    {
        $page = GreenInitiative::where('id', 1)->get();
        return view('backend.pages.greeninitiative-page', compact('page'));
    }




    public function page_greeninitiative(Request $request)
    {
        $request->validate([
            'gi_title' => 'required',
            'gi_subtitle' => 'required',
            'gi_desc' => 'required',
            'gi_sec2_title' => 'required',
            'gi_sec2_desc' => 'required',
            'gi_sec3_title' => 'required',
            'gi_sec3_desc' => 'required',
            'gi_sec4_title' => 'required',
            'gi_sec4_desc' => 'required',
            'gi_sec5_title' => 'required',
            'gi_sec5_desc' => 'required',
            'gi_sec6_title' => 'required',
            'gi_sec6_desc' => 'required',
            'gi_hero_image' => 'mimes:png,jpg,jpeg',
            'gi_sec2_image' => 'mimes:png,jpg,jpeg',
            'gi_sec4_image' => 'mimes:png,jpg,jpeg',
            'gi_sec6_image' => 'mimes:png,jpg,jpeg',
        ]);

        $data  = GreenInitiative::find(1);

        $data->gi_title = $request->input('gi_title');
        $data->gi_subtitle = $request->input('gi_subtitle');
        $data->gi_desc = $request->input('gi_desc');
        $data->gi_sec2_title = $request->input('gi_sec2_title');
        $data->gi_sec2_desc = $request->input('gi_sec2_desc');
        $data->gi_sec3_title = $request->input('gi_sec3_title');
        $data->gi_sec3_desc = $request->input('gi_sec3_desc');
        $data->gi_sec4_title = $request->input('gi_sec4_title');
        $data->gi_sec4_desc = $request->input('gi_sec4_desc');
        $data->gi_sec5_title = $request->input('gi_sec5_title');
        $data->gi_sec5_desc = $request->input('gi_sec5_desc');
        $data->gi_sec6_title = $request->input('gi_sec6_title');
        $data->gi_sec6_desc = $request->input('gi_sec6_desc');


        if ($request->hasFile('gi_hero_image')) {
            $imagePath = public_path('/uploads/' . $data->gi_hero_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $gi_hero_image = time() . ' ' . $request->file('gi_hero_image')->getClientOriginalName();
            $request->file('gi_hero_image')->move(public_path() . '/uploads/', $gi_hero_image);
            $data->gi_hero_image = $gi_hero_image;
        }

        if ($request->hasFile('gi_sec2_image')) {
            $imagePath = public_path('/uploads/' . $data->gi_sec2_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $gi_sec2_image = time() . ' ' . $request->file('gi_sec2_image')->getClientOriginalName();
            $request->file('gi_sec2_image')->move(public_path() . '/uploads/', $gi_sec2_image);
            $data->gi_sec2_image = $gi_sec2_image;
        }
        if ($request->hasFile('gi_sec4_image')) {
            $imagePath = public_path('/uploads/' . $data->gi_sec4_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $gi_sec4_image = time() . ' ' . $request->file('gi_sec4_image')->getClientOriginalName();
            $request->file('gi_sec4_image')->move(public_path() . '/uploads/', $gi_sec4_image);
            $data->gi_sec4_image = $gi_sec4_image;
        }
        if ($request->hasFile('gi_sec6_image')) {
            $imagePath = public_path('/uploads/' . $data->gi_sec6_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $gi_sec6_image = time() . ' ' . $request->file('gi_sec6_image')->getClientOriginalName();
            $request->file('gi_sec6_image')->move(public_path() . '/uploads/', $gi_sec6_image);
            $data->gi_sec6_image = $gi_sec6_image;
        }


        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/greeninitiative');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/greeninitiative');
        }
    }















    public function getCommunitygrowthPage()
    {
        $page = CommunityGrowth::where('id', 1)->get();
        return view('backend.pages.community-growth-page', compact('page'));
    }




    public function page_communitygrowth(Request $request)
    {
        $request->validate([
            'cg_title' => 'required',
            'cg_sec2_title' => 'required',
            'cg_sec2_desc' => 'required',
            'cg_sec3_title' => 'required',
            'cg_sec3_desc' => 'required',
            'cg_hero_image' => 'mimes:png,jpg,jpeg',
            'cg_sec2_image' => 'mimes:png,jpg,jpeg',

        ]);

        $data  = CommunityGrowth::find(1);

        $data->cg_title = $request->input('cg_title');
        $data->cg_subtitle = $request->input('cg_subtitle');
        $data->cg_sec2_title = $request->input('cg_sec2_title');
        $data->cg_sec2_desc = $request->input('cg_sec2_desc');
        $data->cg_sec3_title = $request->input('cg_sec3_title');
        $data->cg_sec3_desc = $request->input('cg_sec3_desc');



        if ($request->hasFile('cg_hero_image')) {
            $imagePath = public_path('/uploads/' . $data->cg_hero_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $cg_hero_image = time() . ' ' . $request->file('cg_hero_image')->getClientOriginalName();
            $request->file('cg_hero_image')->move(public_path() . '/uploads/', $cg_hero_image);
            $data->cg_hero_image = $cg_hero_image;
        }

        if ($request->hasFile('cg_sec2_image')) {
            $imagePath = public_path('/uploads/' . $data->cg_sec2_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $cg_sec2_image = time() . ' ' . $request->file('cg_sec2_image')->getClientOriginalName();
            $request->file('cg_sec2_image')->move(public_path() . '/uploads/', $cg_sec2_image);
            $data->cg_sec2_image = $cg_sec2_image;
        }



        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/communitygrowth');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/communitygrowth');
        }
    }
















    public function getJobsPage()
    {
        $page = Jobs::where('id', 1)->get();
        return view('backend.pages.jobs-page', compact('page'));
    }



    public function page_jobs(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'job_subtitle' => 'required',
            'job_sec2_title' => 'required',
            'job_sec2_sdesc' => 'required',
            'job_sec2_ldesc' => 'required',
            'job_sec3_title' => 'required',
            'job_sec3_sdesc' => 'required',
            'job_sec4_title' => 'required',
            'job_sec4_subtitle' => 'required',
            'job_hero_image' => 'mimes:png,jpg,jpeg',
            'job_sec2_image1' => 'mimes:png,jpg,jpeg',
            'job_sec2_image2' => 'mimes:png,jpg,jpeg',

        ]);

        $data  = Jobs::find(1);

        $data->job_title = $request->input('job_title');
        $data->job_subtitle = $request->input('job_subtitle');
        $data->job_sec2_title = $request->input('job_sec2_title');
        $data->job_sec2_sdesc = $request->input('job_sec2_sdesc');
        $data->job_sec2_ldesc = $request->input('job_sec2_ldesc');
        $data->job_sec3_title = $request->input('job_sec3_title');
        $data->job_sec3_sdesc = $request->input('job_sec3_sdesc');
        $data->job_sec4_title = $request->input('job_sec4_title');
        $data->job_sec4_subtitle = $request->input('job_sec4_subtitle');



        if ($request->hasFile('job_hero_image')) {
            if ($data->job_hero_image !== '') {
                $imagePath = public_path('/uploads/' . $data->job_hero_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $job_hero_image = time() . ' ' . $request->file('job_hero_image')->getClientOriginalName();
            $request->file('job_hero_image')->move(public_path() . '/uploads/', $job_hero_image);
            $data->job_hero_image = $job_hero_image;
        }


        if ($request->hasFile('job_sec2_image1')) {
            if ($data->job_sec2_image1 !== '') {
                $imagePath = public_path('/uploads/' . $data->job_sec2_image1);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $job_sec2_image1 = time() . ' ' . $request->file('job_sec2_image1')->getClientOriginalName();
            $request->file('job_sec2_image1')->move(public_path() . '/uploads/', $job_sec2_image1);
            $data->job_sec2_image1 = $job_sec2_image1;
        }



        if ($request->hasFile('job_sec2_image2')) {
            if ($data->job_sec2_image2 !== '') {
                $imagePath = public_path('/uploads/' . $data->job_sec2_image2);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $job_sec2_image2 = time() . ' ' . $request->file('job_sec2_image2')->getClientOriginalName();
            $request->file('job_sec2_image2')->move(public_path() . '/uploads/', $job_sec2_image2);
            $data->job_sec2_image2 = $job_sec2_image2;
        }




        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/jobs');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/jobs');
        }
    }

















    public function getFaqsPage()
    {
        return view('backend.pages.faqs', ['faqs' => Faq::all()]);
    }

    public function addFaq(Request $request)
    {
        $request->validate([
            'fa_question' => 'required',
            'fa_answer' => 'required',
            'role' => 'required',
        ]);
        $data  = Faq::create($request->all());
        if ($data) {
            $request->session()->flash('success', 'FAQ Added Successfully');
            return redirect('admins/pages/faqs');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('admins/pages/faqs');
        }
    }



    public function editFaq($id)
    {
        return view('backend.pages.edit-faq', ['faq' => Faq::find($id)]);
    }



    public function updateFaq(Request $request)
    {
        $request->validate([
            'fa_question' => 'required',
            'fa_answer' => 'required',
            'faId' => 'required',
            'role' => 'required',
        ]);

        $data  = Faq::find($request->input('faId'))->update([
            'fa_question' => $request->input('fa_question'),
            'fa_answer' => $request->input('fa_answer'),
            'role' => $request->input('role')
        ]);

        if ($data) {
            $request->session()->flash('success', 'FAQ Updated Successfully');
            return redirect('admins/pages/faqs');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('admins/pages/faqs');
        }
    }

    public function deleteFaq($id)
    {
        if (Faq::find($id)->delete()) {
            session()->flash('success', 'FAQ Deleted Successfully');
            return redirect('admins/pages/faqs');
        } else {
            session()->flash('error', 'Something went wrong');
            return redirect('admins/pages/faqs');
        }
    }







    public function linksCards()
    {

        return view('backend.pages.links-card', ['links' => LinksCard::where('id', 1)->get()]);
    }

    public function updateLinksCards(Request $request)
    {
        $request->validate([
            'title1' => 'required',
            'details1' => 'required',
            'link1' => 'required',

            'title2' => 'required',
            'details2' => 'required',
            'link2' => 'required',

            'title3' => 'required',
            'details3' => 'required',
            'link3' => 'required',

        ]);


        $data = LinksCard::find(1);


        if ($request->hasFile('image1')) {
            if ($data->image1 !== null) {
                $imagePath = public_path('/uploads/' . $data->image1);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image1 = time() . ' ' . $request->file('image1')->getClientOriginalName();
            $request->file('image1')->move(public_path() . '/uploads/', $image1);
            $data->image1 = $image1;
        }



        if ($request->hasFile('image2')) {
            if ($data->image2 !== null) {
                $imagePath = public_path('/uploads/' . $data->image2);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image2 = time() . ' ' . $request->file('image2')->getClientOriginalName();
            $request->file('image2')->move(public_path() . '/uploads/', $image2);
            $data->image2 = $image2;
        }



        if ($request->hasFile('image3')) {
            if ($data->image3 !== null) {
                $imagePath = public_path('/uploads/' . $data->image3);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image3 = time() . ' ' . $request->file('image3')->getClientOriginalName();
            $request->file('image3')->move(public_path() . '/uploads/', $image3);
            $data->image3 = $image3;
        }


        $data->title1 = $request->input('title1');
        $data->title2 = $request->input('title2');
        $data->title3 = $request->input('title3');

        $data->details1 = $request->input('details1');
        $data->details2 = $request->input('details2');
        $data->details3 = $request->input('details3');

        $data->link1 = $request->input('link1');
        $data->link2 = $request->input('link2');
        $data->link3 = $request->input('link3');

        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/links-cards');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/links-cards');
        }
    }







    public function getAllGalleryData()
    {
        return view('backend.gallery', ['galleryData' => HomeGallery::all()]);
    }


    public function addGallery(Request $request)
    {
        $gallery = new HomeGallery();
        $imagesArray = [];
        if ($request->images) {
            foreach ($request->images as $key => $image) {
                $imageName = rand(1, 999) . time() . rand(1, 999) . '.' . $image->extension();
                $image->move(public_path('uploads'), $imageName);
                $imagesArray[]['name'] = $imageName;
            }
        }
        $gallery->images = $imagesArray;

        $gallery->title = $request->input('title');
        $gallery->desc = $request->input('desc');
        $gallery->link = $request->input('link');

        $res =  $gallery->save();

        if ($res) {
            $request->session()->flash('success', 'Gallery Added Successfully');
            return redirect('/admins/pages/gallery');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/gallery');
        }
    }





    public function manageGallery($id, $action)
    {
        $gallery =  HomeGallery::find($id);
        if ($action === 'delete') {
            if ($gallery) {
                if ($gallery->images) {
                    foreach ($gallery->images as $image) {
                        foreach ($image as $img) {
                            $imgPath = public_path('/uploads/' . $img);
                            if (File::exists($imgPath)) {
                                unlink($imgPath);
                            }
                        }
                    }
                }
                if ($gallery->delete()) {
                    Session::flash('success', 'Gallery Item Removed Successfully');
                    return redirect('/admins/pages/gallery');
                }
                Session::flash('error', 'Something went wrong');
                return redirect('/admins/pages/gallery');
            }
        }

        if ($action === 'edit') {
            return view('backend.edit-home-gallery', ['gallery' => $gallery]);
        }
    }



    public function updateGallery(Request $request)
    {
        $gallery =  HomeGallery::find($request->input('id'));
        if ($gallery) {
            if ($request->hasFile('images')) {
                if (sizeof($gallery->images) > 0) {
                    foreach ($gallery->images as $oldImage) {
                        $imagePath = public_path('/uploads/' . $oldImage['name']);
                        if (File::exists($imagePath)) {
                            unlink($imagePath);
                        }
                    }
                }

                $imagesArray = [];
                if ($request->images) {
                    foreach ($request->images as $key => $image) {
                        $imageName = rand(1, 999) . time() . rand(1, 999) . '.' . $image->extension();
                        $image->move(public_path('uploads'), $imageName);
                        $imagesArray[]['name'] = $imageName;
                    }
                }
                $gallery->images = $imagesArray;
            }

            $gallery->title = $request->input('title');
            $gallery->desc = $request->input('desc');
            $gallery->link = $request->input('link');

            $res =  $gallery->update();

            if ($res) {
                $request->session()->flash('success', 'Gallery Updated Successfully');
                return redirect('/admins/pages/gallery');
            } else {
                $request->session()->flash('error', 'Something went wrong');
                return redirect('/admins/pages/gallery');
            }
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/gallery');
        }
    }



    public function getMagazineCompetitionPage()
    {

        $page = MagazineCompetition::where('id', 1)->get();
        return view('backend.pages.magazine-competition', compact('page'));
    }


    public function magazineCompetition(Request $request)
    {
        $request->validate([
            'hero_title' => 'required',
            'hero_subtitle' => 'required',
            'section2_text' => 'required',
            'section2_heading' => 'required',
            'section3_heading' => 'required',
            'section3_heading_online' => 'required',
            'section3_heading_kidz' => 'required',
            'hero_image' => 'mimes:png,jpg,jpeg,webp',
        ]);
        $data  = MagazineCompetition::find(1);

        $data->hero_title = $request->input('hero_title');
        $data->hero_subtitle = $request->input('hero_subtitle');
        $data->section2_text = $request->input('section2_text');
        $data->section2_heading = $request->input('section2_heading');
        $data->section3_heading = $request->input('section3_heading');
        $data->section3_heading_online = $request->input('section3_heading_online');
        $data->section3_heading_kidz = $request->input('section3_heading_kidz');


        if ($request->hasFile('hero_image')) {
            if ($data->hero_image !== '') {
                $imagePath = public_path('/uploads/' . $data->hero_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $hero_image = time() . ' ' . $request->file('hero_image')->getClientOriginalName();
            $request->file('hero_image')->move(public_path() . '/uploads/', $hero_image);
            $data->hero_image = $hero_image;
        }

        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/magazine-competition');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/magazine-competition');
        }
    }


















    public function getMagazineGiveawayPage()
    {

        $page = MagazineGiveaway::where('id', 1)->get();
        return view('backend.pages.magazine-giveaway', compact('page'));
    }


    public function magazineGiveaway(Request $request)
    {
        $request->validate([
            'hero_title' => 'required',
            'hero_subtitle' => 'required',
            'section2_text' => 'required',
            'section2_heading' => 'required',
            'section3_heading' => 'required',
            'section3_sponser_name' => 'required',
            'section3_subtitle' => 'required',
            'section3_hamper_content' => 'required',
            'hero_image' => 'mimes:png,jpg,jpeg,webp',
            'section3_gift_images[]' => 'mimes:png,jpg,jpeg,webp',
        ]);
        $data  = MagazineGiveaway::find(1);

        $data->hero_title = $request->input('hero_title');
        $data->hero_subtitle = $request->input('hero_subtitle');
        $data->section2_text = $request->input('section2_text');
        $data->section2_heading = $request->input('section2_heading');
        $data->section3_heading = $request->input('section3_heading');
        $data->section3_sponser_name = $request->input('section3_sponser_name');
        $data->section3_subtitle = $request->input('section3_subtitle');
        $data->section3_hamper_content = $request->input('section3_hamper_content');


        if ($request->hasFile('hero_image')) {
            if ($data->hero_image !== '') {
                $imagePath = public_path('/uploads/' . $data->hero_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $hero_image = time() . ' ' . $request->file('hero_image')->getClientOriginalName();
            $request->file('hero_image')->move(public_path() . '/uploads/', $hero_image);
            $data->hero_image = $hero_image;
        }


        $images = [];
        if ($request->hasFile('section3_gift_images') && $request->section3_gift_images !== 'null') {

            foreach ($data->section3_gift_images as $name => $image) {
                foreach ($image as $key => $img) {
                    $imgPath = public_path('/uploads/' . $img);
                    if (File::exists($imgPath)) {
                        unlink($imgPath);
                    }
                }
            }

            foreach ($request->section3_gift_images as $key => $image) {
                $imageName = rand(1, 999) . time() . rand(1, 999) . '.' . $image->extension();
                $image->move(public_path('uploads'), $imageName);
                $images[]['name'] = $imageName;
            }
            $data->section3_gift_images = $images;
        }
        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/magazine-giveaway');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/magazine-giveaway');
        }
    }











    public function getAdminFeedbackPage()
    {

        $page = Feedback::where('id', 1)->get();
        return view('backend.pages.feedback', compact('page'));
    }



    public function feedbackPage(Request $request)
    {
        $request->validate([
            'hero_title' => 'required',
            'hero_subtitle' => 'required',
            'section2_text' => 'required',
            'section2_heading' => 'required',
            'hero_image' => 'mimes:png,jpg,jpeg,webp',
        ]);
        $data  = Feedback::find(1);

        $data->hero_title = $request->input('hero_title');
        $data->hero_subtitle = $request->input('hero_subtitle');
        $data->section2_text = $request->input('section2_text');
        $data->section2_heading = $request->input('section2_heading');


        if ($request->hasFile('hero_image')) {
            if ($data->hero_image !== '') {
                $imagePath = public_path('/uploads/' . $data->hero_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $hero_image = time() . ' ' . $request->file('hero_image')->getClientOriginalName();
            $request->file('hero_image')->move(public_path() . '/uploads/', $hero_image);
            $data->hero_image = $hero_image;
        }

        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/feedback');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/feedback');
        }
    }


    public function getWebsiteForms()
    {
        return view('backend.website-forms', ['forms' => WebsiteForm::all()]);
    }




    function manageWebsiteForms($id, $action)
    {

        if ($action === 'activate') {
            if (WebsiteForm::where('id', $id)->update(['status' => 'live',])) {
                Session::flash('success', "Form Activated successfully");
                return redirect('/admins/forms');
            } else {
                Session::flash('error', "Something went wrong");
                return redirect('/admins/forms');
            }
        }

        if ($action === 'deactivate') {
            if (WebsiteForm::where('id', $id)->update(['status' => 'deactive',])) {
                Session::flash('success', "Form Deactivated successfully");
                return redirect('/admins/forms');
            } else {
                Session::flash('error', "Something went wrong");
            }
        }
    }

















    public function getAdvertDesign()
    {
        $page = AdvertDesign::where('id', 1)->get();
        return view('backend.pages.advert-design', compact('page'));
    }



    public function advertDesign(Request $request)
    {
        $request->validate([
            'hero_title' => 'required',
            'hero_subtitle' => 'required',
            'section2_text' => 'required',
            'section2_heading' => 'required',
            'section3_heading' => 'required',
            'section3_text' => 'required',
            'section4_heading' => 'required',
            'section4_text' => 'required',
            'section2_image' => 'mimes:png,jpg,jpeg,webp',
            'hero_image' => 'mimes:png,jpg,jpeg,webp',
        ]);
        $data  = AdvertDesign::find(1);

        $data->hero_title = $request->input('hero_title');
        $data->hero_subtitle = $request->input('hero_subtitle');
        $data->section2_text = $request->input('section2_text');
        $data->section2_heading = $request->input('section2_heading');
        $data->section3_heading = $request->input('section3_heading');
        $data->section3_text = $request->input('section3_text');
        $data->section4_heading = $request->input('section4_heading');
        $data->section4_text = $request->input('section4_text');


        if ($request->hasFile('hero_image')) {
            if ($data->hero_image !== '') {
                $imagePath = public_path('/uploads/' . $data->hero_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $hero_image = time() . ' ' . $request->file('hero_image')->getClientOriginalName();
            $request->file('hero_image')->move(public_path() . '/uploads/', $hero_image);
            $data->hero_image = $hero_image;
        }

        if ($request->hasFile('section2_image')) {
            if ($data->section2_image !== '') {
                $imagePath = public_path('/uploads/' . $data->section2_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $section2_image = time() . ' ' . $request->file('section2_image')->getClientOriginalName();
            $request->file('section2_image')->move(public_path() . '/uploads/', $section2_image);
            $data->section2_image = $section2_image;
        }

        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/advert-design');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/advert-design');
        }
    }


















    public function getAdvertiseInMagazine()
    {
        $page = AdvertiseInMagazine::where('id', 1)->get();
        return view('backend.pages.advertise-in-magazine', compact('page'));
    }



    public function advertiseInMagazine(Request $request)
    {
        $request->validate([
            'sec1_content' => 'required',
            'sec2_content' => 'required',
            'sec3_content' => 'required',
            'sec4_content' => 'required',
            'sec5_content' => 'required',
            'sec1_image' => 'mimes:png,jpg,jpeg,webp',
            'sec3_image' => 'mimes:png,jpg,jpeg,webp',
            'sec4_image' => 'mimes:png,jpg,jpeg,webp',
            'sec5_image' => 'mimes:png,jpg,jpeg,webp',
        ]);
        $data  = AdvertiseInMagazine::find(1);

        $data->sec1_content = $request->input('sec1_content');
        $data->sec2_content = $request->input('sec2_content');
        $data->sec3_content = $request->input('sec3_content');
        $data->sec4_content = $request->input('sec4_content');
        $data->sec5_content = $request->input('sec5_content');



        if ($request->hasFile('sec1_image')) {
            if ($data->sec1_image !== '') {
                $imagePath = public_path('/uploads/' . $data->sec1_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $sec1_image = time() . ' ' . $request->file('sec1_image')->getClientOriginalName();
            $request->file('sec1_image')->move(public_path() . '/uploads/', $sec1_image);
            $data->sec1_image = $sec1_image;
        }



        if ($request->hasFile('sec3_image')) {
            if ($data->sec3_image !== '') {
                $imagePath = public_path('/uploads/' . $data->sec3_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $sec3_image = time() . ' ' . $request->file('sec3_image')->getClientOriginalName();
            $request->file('sec3_image')->move(public_path() . '/uploads/', $sec3_image);
            $data->sec3_image = $sec3_image;
        }

        if ($request->hasFile('sec4_image')) {
            if ($data->sec4_image !== '') {
                $imagePath = public_path('/uploads/' . $data->sec4_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $sec4_image = time() . ' ' . $request->file('sec4_image')->getClientOriginalName();
            $request->file('sec4_image')->move(public_path() . '/uploads/', $sec4_image);
            $data->sec4_image = $sec4_image;
        }


        if ($request->hasFile('sec5_image')) {
            if ($data->sec5_image !== '') {
                $imagePath = public_path('/uploads/' . $data->sec5_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $sec5_image = time() . ' ' . $request->file('sec5_image')->getClientOriginalName();
            $request->file('sec5_image')->move(public_path() . '/uploads/', $sec5_image);
            $data->sec5_image = $sec5_image;
        }

        $res =  $data->update();
        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/advertise-in-magazine');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/advertise-in-magazine');
        }
    }
















    public function getArchivesPage()
    {
        $page = Archive::where('id', 1)->get();
        return view('backend.pages.archives', ['page' => $page]);
    }


    public function archivesPageUpdate(Request $request)
    {
        $request->validate([
            'sec1_content' => 'required',
            'sec2_content' => 'required',
            'sec2_table' => 'required',
            'sec1_image' => 'mimes:png,jpg,jpeg,webp',
        ]);

        $data  = Archive::find(1);


        if ($request->hasFile('sec1_image')) {
            if ($data->sec1_image !== '') {
                $imagePath = public_path('/uploads/' . $data->sec1_image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $sec1_image = time() . ' ' . $request->file('sec1_image')->getClientOriginalName();
            $request->file('sec1_image')->move(public_path() . '/uploads/', $sec1_image);
            $data->sec1_image = $sec1_image;
        }

        $data->sec1_content = $request->input('sec1_content');
        $data->sec2_content = $request->input('sec2_content');
        $data->sec2_table = $request->input('sec2_table');

        $res =  $data->update();
        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/archives');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/pages/archives');
        }
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\HomeGallery;
use App\Models\pages\Home;
use App\Models\pages\About;
use App\Models\pages\Advertise;
use App\Models\pages\Businessdirectory;
use App\Models\pages\CommunityGrowth;
use App\Models\pages\Contact;
use App\Models\pages\GreenInitiative;
use App\Models\pages\Jobs;
use App\Models\pages\LinksCard;
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

        // if ($request->hasFile('box_images')) {
        //     foreach ($request->file('box_images') as $imagefile) {
        //         $name = $imagefile->getClientOriginalName();
        //         $imagefile->move(public_path() . '/uploads/', $name);
        //         $data[] = $name;
        //     }
        // }

        // print_r($data[0]);
        $res  = Home::where('id', 1)->update([
            'b1_title' => $request->input('box1_title'),
            // 'b1_image' => $data[0],
            'b2_title' => $request->input('box2_title'),
            // 'b2_image' => $data[1],
            'b3_title' => $request->input('box3_title'),
            // 'b3_image' => $data[2],
            'b4_title' => $request->input('box4_title'),
            // 'b4_image' => $data[3],
            'b5_title' => $request->input('box5_title'),
            // 'b5_image' => $data[4],
            'dir_title' => $request->input('dir_title'),
            'dir_desc' => $request->input('dir_desc'),
        ]);
        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/home');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/posts');
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
            return redirect('/admins/posts');
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
            'contact_hero_image' => 'mimes:png,jpg,jpeg',
        ]);
        $data  = Contact::find(1);

        $data->contact_title = $request->input('contact_title');
        $data->contact_sub_title = $request->input('contact_sub_title');
        $data->contact_team_title = $request->input('contact_team_title');
        $data->contact_team_desc = $request->input('contact_team_desc');

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
            return redirect('/admins/posts');
        }
    }








    public function getAdvertisePage()
    {
        $page = Advertise::where('id', 1)->get();

        return view('backend.pages.advertise-page-form', compact('page'));
    }


    public function page_advertise(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'ad_title' => 'required',
            'ad_subtitle' => 'required',
            'ad_sec2_heading' => 'required',
            'ad_sec2_desc' => 'required',
            'ad_pathway_heading' => 'required',
            'ad_pathway_desc' => 'required',
            'ad_service_desc' => 'required',
            'ad_benifits_title' => 'required',
            'ad_benifits' => 'required',
            'ad_prices_desc' => 'required',
            'add_hero_image' => 'mimes:png,jpg,jpeg',
        ]);
        $data  = Advertise::find(1);

        $data->ad_title = $request->input('ad_title');
        $data->ad_subtitle = $request->input('ad_subtitle');
        $data->ad_sec2_heading = $request->input('ad_sec2_heading');
        $data->ad_sec2_desc = $request->input('ad_sec2_desc');
        $data->ad_pathway_heading = $request->input('ad_pathway_heading');
        $data->ad_pathway_desc = $request->input('ad_pathway_desc');
        $data->ad_service_desc = $request->input('ad_service_desc');
        $data->ad_benifits_title = $request->input('ad_benifits_title');
        $data->ad_benifits = $request->input('ad_benifits');
        $data->ad_prices_desc = $request->input('ad_prices_desc');

        if ($request->hasFile('add_hero_image')) {
            $imagePath = public_path('/uploads/' . $data->add_hero_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }

            $add_hero_image = time() . ' ' . $request->file('add_hero_image')->getClientOriginalName();
            $request->file('add_hero_image')->move(public_path() . '/uploads/', $add_hero_image);
            $data->add_hero_image = $add_hero_image;
        }

        $res =  $data->update();

        if ($res) {
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('/admins/pages/advertise');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/posts');
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
            'bd_sec3_desc' => 'required',
            'bd_sec4_title' => 'required',
            'bd_sec4_desc' => 'required',
            'bd_hero_image' => 'mimes:png,jpg,jpeg',
            'bd_sec3_image' => 'mimes:png,jpg,jpeg',
        ]);
        $data  = Businessdirectory::find(1);

        $data->bd_title = $request->input('bd_title');
        $data->bd_cat_title = $request->input('bd_cat_title');
        $data->bd_cat_desc = $request->input('bd_cat_desc');
        $data->bd_sec3_title = $request->input('bd_sec3_title');
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
            return redirect('/admins/posts');
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
            return redirect('/admins/posts');
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
            return redirect('/admins/posts');
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
            return redirect('/admins/posts');
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
            return redirect('/admins/posts');
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
    }
}

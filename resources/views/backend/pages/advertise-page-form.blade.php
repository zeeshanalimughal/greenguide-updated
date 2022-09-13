@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Advertise Page Settings</h1>
    @endpush

{{-- {{dd($page)}} --}}
    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Advertise Page Settings</h3>
                </div>
                <div class="card-body">
                    @if (session()->has('error'))
                        @php
                            echo message(session()->get('error'), 'danger');
                        @endphp
                    @endif
                    @if (session()->has('success'))
                        @php
                            echo message(session()->get('success'), 'success');
                        @endphp
                    @endif
                    @if ($errors->any())
                        @php
                            echo errorAlert($errors->all(), 'danger');
                        @endphp
                    @endif
                    <a href="advertise-carousel" class="btn btn-info">Manage The Carousel Of Advertise Page</a>
                    <form action="{{route("page.advertise")}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                      <label class="form-label">Advertise Hero Background Image </label>
                                      <input type="file" name="add_hero_image" class="form-control">
                                  </div>
                              </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Add title </label>
                                    <input type="text" value="{{ $page[0]->ad_title }}" name="ad_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Add subtitle </label>
                                    <input type="text" value="{{ $page[0]->ad_subtitle }}" name="ad_subtitle"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Add Section 2 heading </label>
                                    <input type="text" value="{{ $page[0]->ad_sec2_heading }}" name="ad_sec2_heading"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Add Section 2 Description (add in form of dot lists)</label>
                                   <textarea name="ad_sec2_desc">
                                        {{$page[0]->ad_sec2_desc}}
                                   </textarea>
                                </div>
                            </div>



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Add Section 2 Image one </label>
                                    <input type="file" name="ad_sec2_image1" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Add Section 2 Image two </label>
                                    <input type="file" name="ad_sec2_image2" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Add Carousel Background Image </label>
                                    <input type="file" name="add_carusel_bg_image" class="form-control">
                                </div>
                            </div>






                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Add Section Pathway Title </label>
                                    <input type="text" value="{{ $page[0]->ad_pathway_heading }}" name="ad_pathway_heading"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Add Pathway Description (add in form of dot lists)</label>
                                   <textarea name="ad_pathway_desc">
                                        {{$page[0]->ad_pathway_desc}}
                                   </textarea>
                                </div>
                            </div>


                            


                            
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Add Section Pathway Side Image </label>
                                    <input type="file" name="ad_pathway_image" class="form-control">
                                </div>
                            </div>

                            

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Our Services Title </label>
                                    <input type="text" value="{{ $page[0]->add_service_title }}" name="add_service_title"
                                        class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Our Services Desc</label>
                                    <textarea name="ad_service_desc">
                                        {{$page[0]->ad_service_desc}}
                                   </textarea>
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Our Services Images</label>
                                    <input type="file" name="add_services_images[]" class="form-control" multiple="true" accept="image/*">
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">UpcommingIssues content</label>
                                   <textarea name="add_upcomming_issue_content">
                                        {{$page[0]->add_upcomming_issue_content}}
                                   </textarea>
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Add Benifits Title </label>
                                    <input type="text" value="{{ $page[0]->ad_benifits_title }}" name="ad_benifits_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Advertisement Benifits (seperate each benifit by |)</label>
                                   <textarea name="ad_benifits">
                                        {{$page[0]->ad_benifits}}
                                   </textarea>
                                </div>
                            </div>

                            
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Add Prices Heading </label>
                                    <input type="text" value="{{ $page[0]->add_prices_heading }}" name="add_prices_heading"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Add prices Desc</label>
                                    <textarea name="ad_prices_desc">
                                        {{$page[0]->ad_prices_desc}}
                                   </textarea>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Add Boocking Heading </label>
                                    <input type="text" value="{{ $page[0]->add_booking_title }}" name="add_booking_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Add Boocking Desc</label>
                                    <textarea name="add_booking_desc">
                                        {{$page[0]->add_booking_desc}}
                                   </textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Add Further Info Text</label>
                                    <textarea name="add_further_info_text">
                                        {{$page[0]->add_further_info_text}}
                                   </textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Add Further Info Image</label>
                                    <input type="file" name="add_further_info_image" class="form-control" accept="image/*">
                                </div>
                            </div>


                        </div>



                        <input type="submit" value="Update Details" class="btn btn-primary">

                </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    <script>
        CKEDITOR.replace('ad_sec2_desc');
        CKEDITOR.replace('ad_prices_desc');
        CKEDITOR.replace('ad_benifits');
        CKEDITOR.replace('ad_service_desc');
        CKEDITOR.replace('ad_pathway_desc');
        CKEDITOR.replace('add_upcomming_issue_content');
        CKEDITOR.replace('add_booking_desc');
        CKEDITOR.replace('add_further_info_text');
    </script>
@endsection

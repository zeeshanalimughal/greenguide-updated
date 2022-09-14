@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Contact Page Settings</h1>
    @endpush

    {{-- {{$page}} --}}
    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Contact Page Settings</h3>
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
                    <form action="{{ route('page.contact') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Contact Hero Background Image </label>
                                    <input type="file" name="contact_hero_image" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Page title </label>
                                    <input type="text" value="{{ $page[0]->contact_title }}" name="contact_title"
                                        class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Page Sub title </label>
                                    <input type="text" value="{{ $page[0]->contact_sub_title }}" name="contact_sub_title"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">OTP checkbox Text </label>
                                    <input type="text" value="{{ $page[0]->otp_checkbox_text }}" name="otp_checkbox_text"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">OTP Section Bottom Text</label>
                                    <textarea name="otp_bottom_text">
                                        {{ $page[0]->otp_bottom_text }}
                                   </textarea>
                                </div>
                            </div>



                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Contact Us Google Map Iframe Code</label>
                                    <textarea rows="6" class="form-control" name="contact_map">{{$page[0]->contact_map}}</textarea>
                                </div>
                            </div>




                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Contact team title</label>
                                    <input type="text" value="{{ $page[0]->contact_team_title }}"
                                        name="contact_team_title" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Contact team description</label>
                                    <input type="text" value="{{ $page[0]->contact_team_desc }}" name="contact_team_desc"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Contact Team Background Image </label>
                                    <input type="file" name="contact_team_bg_image" class="form-control">
                                </div>
                            </div>












                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Finance Email</label>
                                    <input type="text" value="{{ $page[0]->finance_email }}" name="finance_email"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    Finance Phone
                                    <input type="text" value="{{ $page[0]->finance_phone }}" name="finance_phone"
                                        class="form-control">
                                </div>
                            </div>





                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Operations Email</label>
                                    <input type="text" value="{{ $page[0]->operations_email }}" name="operations_email"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Operations Phone</label>
                                    <input type="text" value="{{ $page[0]->operations_phone }}" name="operations_phone"
                                        class="form-control">
                                </div>
                            </div>





                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Sales Team Email</label>
                                    <input type="text" value="{{ $page[0]->sales_email }}" name="sales_email"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Sales Team Phone</label>
                                    <input type="text" value="{{ $page[0]->sales_phone }}" name="sales_phone"
                                        class="form-control">
                                </div>
                            </div>




                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Design Email</label>
                                    <input type="text" value="{{ $page[0]->design_email }}" name="design_email"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Design Phone</label>
                                    <input type="text" value="{{ $page[0]->design_phone }}" name="design_phone"
                                        class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Customer Service Email</label>
                                    <input type="text" value="{{ $page[0]->customer_email }}" name="customer_email"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Customer Service Phone</label>
                                    <input type="text" value="{{ $page[0]->customer_phone }}" name="customer_phone"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hr Development Email</label>
                                    <input type="text" value="{{ $page[0]->hr_email }}" name="hr_email"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hr Development Phone</label>
                                    <input type="text" value="{{ $page[0]->hr_phone }}" name="hr_phone"
                                        class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">facebook link</label>
                                    <input type="text" value="{{ $page[0]->facebook }}" name="facebook"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">skype link</label>
                                    <input type="text" value="{{ $page[0]->skype }}" name="skype"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">twitter link</label>
                                    <input type="text" value="{{ $page[0]->twitter }}" name="twitter"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">instagram link</label>
                                    <input type="text" value="{{ $page[0]->instagram }}" name="instagram"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">linkdin link</label>
                                    <input type="text" value="{{ $page[0]->linkdin }}" name="linkdin"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">youtube link</label>
                                    <input type="text" value="{{ $page[0]->youtube }}" name="youtube"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">vimeo link</label>
                                    <input type="text" value="{{ $page[0]->vimeo }}" name="vimeo"
                                        class="form-control">
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
        CKEDITOR.replace('otp_bottom_text');
    </script>
@endsection

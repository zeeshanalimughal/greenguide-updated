@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Archives Page Settings</h1>
    @endpush

{{-- {{dd($page)}} --}}
    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Archives Page Settings</h3>
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
                    <form action="{{route("page.archives")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">




                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero Background Image</label>
                                    <input type="file" name="hero_image" class="form-control" accept="image/*">
                                </div>
                              </div>
                            <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                      <label class="form-label">Hero Heading </label>
                                      <input type="text" name="hero_heading" class="form-control" value="{{$page[0]->hero_heading}}">
                                  </div>
                              </div>

                            <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                      <label class="form-label">Hero Subheading </label>
                                      <input type="text" name="hero_subheading" class="form-control" value="{{$page[0]->hero_subheading}}">
                                  </div>
                              </div>



                            <div class="col-sm-12 col-md-12">
                                  <div class="form-group">
                                      <label class="form-label">Section one image </label>
                                      <input type="file" name="sec1_image" class="form-control">
                                  </div>
                              </div>


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section one content</label>
                                   <textarea name="sec1_content">
                                        {{$page[0]->sec1_content}}
                                   </textarea>
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section two content</label>
                                   <textarea name="sec2_content">
                                        {{$page[0]->sec2_content}}
                                   </textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section two table</label>
                                   <textarea name="sec2_table">
                                        {{$page[0]->sec2_table}}
                                   </textarea>
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

        CKEDITOR.replace('sec1_content');
        CKEDITOR.replace('sec2_content');
        CKEDITOR.replace('sec2_table');

    </script>
@endsection

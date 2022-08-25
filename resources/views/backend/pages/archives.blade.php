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

                            {{-- <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                      <label class="form-label">GreenInitiative Hero Background Image </label>
                                      <input type="file" name="archive_hero_image" class="form-control">
                                  </div>
                              </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero title </label>
                                    <input type="text" value="" name="gi_title"
                                        class="form-control">
                                </div>
                            </div>
                             --}}


                        </div>



                        {{-- <input type="submit" value="Update Details" class="btn btn-primary"> --}}

                </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    <script>
    
        // CKEDITOR.replace('gi_sec6_desc');

    </script>
@endsection

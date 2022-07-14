@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
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


    {{-- <input type='button' class="btn btn-warning mt-2" value='Are you sure?' id='btn'> --}}
    {{-- {{ print_r($events) }} --}}
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Advert Design Orders</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>borough</th>
                                    <th>issue</th>
                                    <th>Advert size & qty</th>
                                    <th>Total Amount</th>
                                    {{-- <th>advert price</th> --}}
                                    <th>created at</th>
                                    <th>status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 0;
                                @endphp
                                @foreach ($adverts as $advert)
                                    <tr>
                                        @php
                                            ++$count;
                                        @endphp
                                        <td>{{ $count }}</td>
                                        <td>{{ $advert->name }}</td>
                                        <td>{{ $advert->email }}</td>
                                        <td>{{ $advert->borough }}</td>
                                        <td>{{ $advert->issue }}</td>
                                        <td>
                                            @for ($i = 0; $i < sizeof($advert->advertSize); $i++)
                                                @php
                                                    echo '<div><b>' . $advert->advertSize[$i] . '</b> => ' . $advert->quantity[$i] . '</div>';
                                                @endphp
                                            @endfor
                                        </td>
                                        <td>{{ $advert->amount }}</td>
                                        <td>{{ $advert->created_at->diffForHumans() }}</td>
                                        <td>
                                            @if ($advert->status == 'processing')
                                                <span
                                                    class="badge badge-pill py-2 px-3 mt-2 bg-primary">{{ $advert->status }}</span>
                                            @elseif ($advert->status == 'cancellled')
                                                <span
                                                    class="badge badge-pill py-2 px-3 mt-2 bg-danger">{{ $advert->status }}</span>
                                            @else
                                                <span class="badge badge-pill py-2 px-3 mt-2 bg-success">completed</span>
                                            @endif

                                        </td>
                                        <td>

                                            @if ($advert->status == 'processing')
                                                <a
                                                    href="{{ url('/admins/advert-design-book') }}/{{ $advert->id }}/cancel">
                                                    <button class="btn btn-danger" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="status live">Cancel Order</button>
                                                </a>
                                            @endif

                                            @if ($advert->status == 'processing')
                                                <a
                                                    href="{{ url('/admins/advert-design-book') }}/{{ $advert->id }}/completed">
                                                    <button class="btn btn-secondary" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="accept event again">Mark Completed</button>
                                                </a>
                                            @endif
                                        </td>
                                        <td> <a href="{{ url('/admins/advert-design-book') }}/{{ $advert->id }}/remove">
                                                <button class="btn btn-warning" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title=""
                                                    data-bs-original-title="delete event">Remove</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->








    {{-- @push('swalrt')
        <script>
            $(document).ready(function() {
                $("#btn").on('click', function() {
                    // swal("warning!", "Message sent!", "warning");
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false
                    })

                    swalWithBootstrapButtons.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        } else if (
                            /* Read more about handling dismissals below */
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            swalWithBootstrapButtons.fire(
                                'Cancelled',
                                'Your imaginary file is safe :)',
                                'error'
                            )
                        }
                    })

                })
            })
        </script>
    @endpush --}}
@endsection

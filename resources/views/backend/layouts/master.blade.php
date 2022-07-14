@if (isset($auth) && $auth == 'auth')


    @include('backend.layouts.auth-header')
        @yield('auth-section')
    @include('backend.layouts.auth-footer')


@else
    @include('backend.layouts.header')
    @include('backend.layouts.top-bar')
    @include('backend.layouts.sidebar')

    @yield('admin-section')

    @include('backend.layouts.country-select')
    @include('backend.layouts.footer')
@endif

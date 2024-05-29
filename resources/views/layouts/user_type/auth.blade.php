@extends('layouts.app')

@section('auth')


    @if(\Request::is('static-sign-up')) 
        
        @yield('content')
        
    
    @elseif (\Request::is('static-sign-in')) 
        
            @yield('content')
        
    
    @else
        @if (\Request::is('rtl'))  
            @include('layouts.navbars.auth.sidebar-rtl')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.auth.nav-rtl')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>

        @elseif (\Request::is('profile'))  
            @include('layouts.navbars.auth.sidebar')
            <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
                @include('layouts.navbars.auth.nav')
                @yield('content')
            </div>

        @elseif (\Request::is('virtual-reality')) 
            @include('layouts.navbars.auth.nav')
            <div class="border-radius-xl mt-3 mx-3 position-relative" style="background-image: url('../assets/img/vr-bg.jpg') ; background-size: cover;">
                @include('layouts.navbars.auth.sidebar')
                <main class="main-content mt-1 border-radius-lg">
                    @yield('content')
                </main>
            </div>
            @include('layouts.footers.auth.footer')

        @elseif (\Request::is('dashboard')) 
            @include('layouts.navbars.auth.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg {{ (Request::is('rtl') ? 'overflow-hidden' : '') }}">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>

        @else
        <header class="header-light border-radius-xl m-2 "  style="width:98.5%">
                @include('layouts.navbars.auth.navG')
            </header>
            <div class="border-radius-xl mt-5 pt-4 mx-3 d-flex">
                <nav class="me-2">
                    @include('layouts.navbars.auth.sidebarG')
                </nav>
                <main class="">
                    @yield('content')
                </main>
            </div>
            @include('layouts.footers.auth.footer')
        @endif

    @endif

    

@endsection
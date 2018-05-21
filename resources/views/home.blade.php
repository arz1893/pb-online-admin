@extends('layouts.app')

@section('content')
    @include('layouts.includes.sidebar')

    <div class="main-container">
        <div class="pd-ltr-20 height-100-p xs-pd-20-10">
            @yield('page-header')

            @yield('main-content')
        </div>
    </div>
@endsection

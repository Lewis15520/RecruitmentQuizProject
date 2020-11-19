@extends('layouts.app')
@section('app_content')

    @include('partials.auth_header')

    <div class="uiRow">

        <div class="uiCol sidebarColumn --vertical-top">
            @include('partials.auth_sidebar')
        </div>

        <div class="uiCol --vertical-top contentColumn">
            @yield('template_content')
        </div>

    </div>

@endsection

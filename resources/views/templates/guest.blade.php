@extends('layouts.app')
@section('app_content')
    <div class="uiRow --fullscreen">
        <div class="uiCol topDefaultPadding --vertical-top">
            @yield('template_content')
        </div>
    </div>
@endsection

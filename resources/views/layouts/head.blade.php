<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{ asset('css/common.css') }}"/>
@if(auth()->check())
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}"/>
@else
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}"/>
@endif
<link rel="icon" href="{{ asset('images/default-logo.png') }}">
@yield('link_tags')

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('head_script_tags')

<title>QuizPlatform - @yield('title')</title>

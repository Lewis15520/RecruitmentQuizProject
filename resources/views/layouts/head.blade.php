<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{ asset('iziToast/dist/css/iziToast.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/common.css') }}"/>
@if(auth()->check())
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}"/>
@else
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}"/>
@endif
<link rel="icon" href="{{ asset('images/logo.png') }}">
@yield('link_tags')

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://kit.fontawesome.com/178bf4c715.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('iziToast/dist/js/iziToast.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('head_script_tags')

<title>QuizPlatform - @yield('title')</title>

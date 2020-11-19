@extends('templates.guest')
@section('template_content')

    <div id="register">
        @if(isset($errors))
            @foreach($errors as $error)
                @foreach($error as $message)
                    <p>{{ $message }}</p>
                @endforeach
            @endforeach
        @endif

        <form action="{{ route('register.post') }}" method="POST">

            <div class="blockForm">
                <div class="padding">
                    <img src="{{ asset('images/logo.png') }}" alt="logo"/>
                    <h5 class="text-center">Register your {{ env('APP_NAME') }} account</h5>
                </div>
                <div class="padding">
                    <input type="text" name="name" placeholder="Full Name" required/>
                    <input type="email" name="email" placeholder="Email Address" required/>
                    <input type="password" name="password" placeholder="Password" required/>
                    <input type="password" name="password_confirmation" placeholder="Password Confirmation" required/>
                </div>

                <div class="padding uiRow">
                    <div class="uiCol --vertical-middle">
                        <a href="{{ route('login.get') }}">Sign in</a>
                    </div>
                    <div class="uiCol text-right --vertical-middle">
                        <button class="dftButton --primary">Register</button>
                    </div>
                </div>

            </div>

            {{ csrf_field() }}

        </form>
            <p class="text-center loginInfo">{{ env('APP_NAME') }}, All Rights Reserved</p>
    </div>

@endsection

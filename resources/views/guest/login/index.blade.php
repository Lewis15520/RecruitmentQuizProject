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

        <form action="{{ route('login.post') }}" method="POST">

            <div class="blockForm topLoader">
                <div class="padding">
                    <h1>Login</h1>
                </div>
                <div class="padding">
                    <p class="heading">Email Address</p>
                    <p class="caption">Type the email address you use for the account.</p>
                    <input type="email" name="email" required/>
                </div>
                <div class="padding">
                    <p class="heading">Password</p>
                    <p class="caption">Type the password you use for the account.</p>
                    <input type="password" name="password" required/>
                </div>
                <div class="padding uiRow">
                    <div class="uiCol --vertical-middle">
                        <a href="{{ route('register.get') }}" class="dftButton --disabled">Register</a>
                    </div>
                    <div class="uiCol text-right --vertical-middle">
                        <button class="dftButton --primary">Submit</button>
                    </div>
                </div>

            </div>

            {{ csrf_field() }}

        </form>
    </div>

@endsection

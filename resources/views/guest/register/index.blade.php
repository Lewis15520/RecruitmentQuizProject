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

            <div class="blockForm topLoader">
                <div class="padding">
                    <h1>Registration</h1>
                </div>
                <div class="padding">
                    <p class="heading">Full Name</p>
                    <p class="caption">Please type your full name here.</p>
                    <input type="text" name="name" placeholder="E.g Joe Blogs" required/>
                </div>
                <div class="padding">
                    <p class="heading">Email Address</p>
                    <p class="caption">Please provide your email address.</p>
                    <input type="email" name="email" placeholder="E.g joe.blogs@example.com" required/>
                </div>
                <div class="padding">
                    <p class="heading">Password</p>
                    <p class="caption">Type the password you would like to use for the account.</p>
                    <input type="password" name="password" required/>
                </div>
                <div class="padding">
                    <p class="heading">Confirm Password</p>
                    <p class="caption">Please confirm the password.</p>
                    <input type="password" name="password_confirmation" required/>
                </div>

                <div class="padding uiRow">
                    <div class="uiCol --vertical-middle">
                        <a href="#" class="dftButton --disabled">Back to login</a>
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

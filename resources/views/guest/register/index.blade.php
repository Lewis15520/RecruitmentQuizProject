@extends('templates.guest')
@section('template_content')

    @if(isset($errors))
        @foreach($errors as $error)
            @foreach($error as $message)
                <p>{{ $message }}</p>
            @endforeach
        @endforeach
    @endif

    <form action="{{ route('register.post') }}" method="POST">

        <input type="text" name="name" value="Lewis Hayter" required/>
        <input type="email" name="email" value="lohayter@googlemail.com" required/>
        <input type="password" name="password" value="password123" required/>
        <input type="password" name="password_confirmation" value="password123" required/>

        {{ csrf_field() }}
        <button>Submit</button>

    </form>

@endsection

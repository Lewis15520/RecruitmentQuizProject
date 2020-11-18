@extends('templates.auth')
@section('template_content')
    <h1>Quizzes Create</h1>

    @if(isset($errors))
        @foreach($errors as $error)
            @foreach($error as $message)
                <p>{{ $message }}</p>
            @endforeach
        @endforeach
    @endif

    <form action="{{ route('quizzes.store') }}" method="post">

        <input type="text" name="name" required/>
        <input type="text" name="content" required/>

        <button>Save</button>

        {{ csrf_field() }}
    </form>


@endsection

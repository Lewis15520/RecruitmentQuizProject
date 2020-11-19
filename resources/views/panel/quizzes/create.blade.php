@extends('templates.auth')
@section('nav-quizzes', "class=active")
@section('template_content')
    <div class="headerSection">
        <h5>Create Quiz</h5>
        <div class="assignRight">
            <a class="dftButton --primary" href="{{ route('quizzes.index') }}"><i class="fas fa-chevron-left"></i>Go Back</a>
        </div>
    </div>

    <form action="{{ route('quizzes.store') }}" method="post">

        <input type="text" name="name" value="{{ old('name') }}" placeholder="Quiz Name" required/>
        <input type="text" name="content" required/>

        <button>Save</button>

        {{ csrf_field() }}
    </form>


@endsection

@extends('templates.auth')
@section('nav-quizzes', "class=active")
@section('template_content')

    <div class="headerSection">
        <h5>Quizzes</h5>
        <div class="assignRight">
            <a class="dftButton --primary" href="{{ route('quizzes.create') }}"><i class="fas fa-plus"></i>Create</a>
        </div>
    </div>


@endsection

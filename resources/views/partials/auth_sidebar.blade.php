<div id="sidebar">

    <ul>
        <li><a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
        <li><a href="{{ route('quizzes.index') }}" @yield('nav-quizzes')><i class="far fa-copy"></i>Quizzes</a></li>
        <li><a href="#"><i class="fas fa-users"></i>Candidates</a></li>
        <li><a href="#"><i class="fas fa-box-open"></i>Archives</a></li>
    </ul>

</div>

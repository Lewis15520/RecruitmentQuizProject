<header>
    <div class="uiRow">

        <div class="uiCol logoCol">
            <img src="{{ asset('images/logo.png') }}"/>
            <p class="title">{{ env('APP_NAME') }}</p>
        </div>

        <div class="uiCol searchCol">

            <form action="#" method="get">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                    <input type="text" class="form-control" placeholder="Search" aria-label="" aria-describedby="basic-addon1">
                </div>
            </form>

        </div>
        <div class="uiCol text-right">
            <div class="profile">
                <div class="btn-group">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('images/dft.png') }}"/>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdownMenu">
                        <div class="profileScript padding uiRow">
                            <div class="uiCol">
                                <img src="{{ asset('images/dft.png') }}"/>
                            </div>
                            <div class="uiCol">
                                <p>{{ Auth::user()->name }}</p>
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="far fa-user"></i>Account</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-cog"></i>Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>Sign out</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>

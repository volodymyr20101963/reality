<header class="mb-5">
    <!-- Fixed navbar -->
{{--    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">--}}
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark baground">
{{--        <a class="navbar-brand" href="{{route('index')}}">Reality</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
{{--                <li class="nav-item active">--}}
                <li class="nav-item {{Request::is('*index*')?'active':''}}">
                    <a class="nav-link" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item {{Request::is('*offers*')?'active':''}}">
                    <a class="nav-link" href="{{route('offers')}}">Offer</a>
                </li>
                <li class="nav-item {{Request::is('*article*')?'active':''}}">
                    <a class="nav-link" href="{{route('article')}}">Article</a>
                </li>
                <li class="nav-item {{Request::is('*about*')?'active':''}}">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>

                @guest
                    <li class="nav-item" {{Request::is('*login*')?'active':''}}>
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item {{Request::is('*register*')?'active':''}}">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item {{Request::is('*cabinet*')?'active':''}}">
                        <a class="nav-link" href="{{route('cabinet')}}">My cabinet</a>
                    </li>
                    @if (Auth::user() && Auth::user()->role == 'ADMIN')
                        <li class="nav-item" {{Request::is('*admin/offers*')?'active':''}}>
                            <a class="nav-link" href="{{route('admin-offers')}}">Admin Panel</a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Link</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
{{--                </li>--}}
            </ul>
            @if(Request::route()->getName() == 'offers')
                <form method="get" action="{{route('offers-search')}}" class="form-inline mt-2 mt-md-0">                <input name="search" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <input name="search" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            @else
                <form method="get" action="{{route('article-search')}}" class="form-inline mt-2 mt-md-0">
                    <input name="search" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            @endif
        </div>
    </nav>
</header>

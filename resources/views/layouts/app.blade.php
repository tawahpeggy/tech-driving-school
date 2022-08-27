<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tech Driving School') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    @vite(['resources/js/app.js'])
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('fa5/css/all.min.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app" class="">
        <div class="">
            <nav class="navbar navbar-expand-md navbar-light bg-white bb-y">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Tech Driving School') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
    
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="">
            @guest
            <div class="w-100 row h-100">
                @yield('content')
            </div>
            @else
            <div class="w-100 row h-100">
                <div class=" col-md-3 h-100 pt-5 bg-y">
                    <div class="container">
                        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div id="collapsibleNavId">
                            <div class="w-100 text-center">
                                <span class="fas fa-layer-group fs-1 t-b fw-bolder"></span> 
                            </div>
                            <div class=" mx-auto mt-5 py-4 mt-lg-0 t-b h5">
                                <div class="nav-item py-2 bb-b active">
                                    <a class="nav-link" href="{{route('home')}}">Dashboard</a>
                                </div>
                                @if(auth()->user()->role == 1)
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.students')}}">Students</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.applications')}}">Applications</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.payments')}}">Payments</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.sessions')}}">Sessions</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.modes')}}">Modes</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.schedules')}}">Schedules</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.profile')}}">Profile</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.settings')}}">Settings</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.info')}}">Info</a>
                                    </div>

                                @endif
                                @if(auth()->user()->role == 2)
                                
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('user.application')}}">Apply</a>
                                    </div>
                                    @if(count(\DB::table('applications')->where('user_id', '=', auth()->user()->id)->get()) > 0)
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('user.application')}}">Payments</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('user.time_table')}}">Time table</a>
                                    </div>
                                    @endif
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('user.settings')}}">Settings</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('user.profile')}}">Profile</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="#">Info</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class=" col-md-9 h-100">
                    <div class="w-100 text-center py-3">
                        @if(session('error'))
                        <span class="fs-4 text-danger">{{session('error')}}</span>
                        @endif
                        @if(session('success'))
                        <span class="fs-4 text-success">{{session('success')}}</span>
                        @endif
                        @if(session('message'))
                        <span class="fs-4 text-primary">{{session('message')}}</span>
                        @endif
                    </div>
                    @yield('content')
                </div>
            </div>
            @endguest
        </div>
    </div>
    @yield('script')
</body>
</html>

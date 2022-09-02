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
    <div id="app">
        <div class="part1 bg-white bb-y">
            <nav class="navbar navbar-expand-md navbar-light">
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
        <div class="part2">
            @guest
            <div class="w-100 row h-100">
                @yield('content')
            </div>
            @else
            <div class="w-100 row h-100">
                <div class="col-xs-12 col-md-4 col-lg-3 py-4 bg-y part2-nav">
                    <div class="container">
                        <button class="navbar-toggler d-lg-none" id="nav-toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars t-w fw-bold fs-4"></span>
                        </button>
                        <div id="collapsibleNavId" class="navbar">
                            <div class="w-100 text-center">
                                <span class="fas fa-layer-group fs-1 t-b fw-bolder"></span> 
                            </div>
                            <div class="col-xs-8 col-sm-10 mx-auto mt-5 py-4 mt-lg-0 t-b h5">
                                <div class="nav-item py-2 bb-b active">
                                    <a class="nav-link" href="{{route('home')}}"><i class="fas fa-graduation-cap ml-2 col-1"></i> Dashboard</a>
                                </div>
                                @if(auth()->user()->role == 1)
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.students')}}"><i class="fas fa-users ml-2 col-2 col-sm-1  "></i> Students</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.applications')}}"> <i class="fas fa-file-archive ml-2 col-1  "></i> Applications</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.payments')}}"><i class="fas fa-money-bill-alt col-1   "></i> Payments</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.sessions')}}"><i class="fas fa-parking ml-2 col-1  "></i> Sessions</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.modes')}}"><i class="fas fa-adjust ml-2 col-1   "></i> Modes</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                    <a href="{{route('admin.session.set_schedule')}}" class="nav-link"><i class="fas fa-procedures ml-2 col-1"> </i> assign schedule</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.schedules')}}"><i class="fas fa-project-diagram ml-2 col-1  "></i> Schedules</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.profile')}}"><i class="fas fa-info ml-2 col-1  "></i> Profile</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.settings')}}"><i class="fas fa-cogs ml-2 col-1  "></i> Settings</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('admin.info')}}"><i class="fas fa-database ml-2 col-1  "></i> Info</a>
                                    </div>

                                @endif
                                @if(auth()->user()->role == 2)
                                
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('user.application')}}"><i class="fas fa-file-archive ml-2 col-1  "></i>Apply</a>
                                    </div>
                                    @if(count(\DB::table('applications')->where('user_id', '=', auth()->user()->id)->get()) > 0)
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('user.application')}}"><i class="fas fa-money-bill-alt col-1   "></i>Payments</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('user.time_table')}}"><i class="fas fa-project-diagram ml-2 col-1  "></i>Time table</a>
                                    </div>
                                    @endif
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('user.profile')}}"><i class="fas fa-info ml-2 col-1  "></i>Profile</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="{{route('user.settings')}}"><i class="fas fa-cogs ml-2 col-1  "></i>Settings</a>
                                    </div>
                                    <div class="nav-item py-2 bb-b">
                                        <a class="nav-link" href="#"><i class="fas fa-database ml-2 col-1  "></i>Info</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-xs-12 col-md-8 col-lg-9 h-100 d-flex flex-column overflow-scroll py-5">
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

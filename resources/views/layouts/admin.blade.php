<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="row">
                <div class="sidebar col-md-2 d-none d-md-block bg-dark">
                
                <div class="logo">
                    <a class="navbar-brand" href="{{ url('/') }}">
                    </a>
                </div>
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item sidebar-item"><a class="nav-link active" href="{{ url('/admin/appointments') }}">Appointments</a></li>
                            <li class="nav-item sidebar-item"><a class="nav-link" href="{{ url('/admin/doctors') }}">Doctors</a></li>

                        </ul>
                        
                    </div>
                </div>
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <ul class="navbar-nav ml-auto">
                
                               <a class="dropdown-item" href="{{ route('home') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>      
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                </ul>
                                 </nav>

                <main class="col px-0 py-5">


                    @yield('content')

    
                </main>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flatext</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/admin.css') }}">
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/admin/home') }}">
                    Flatext
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    {{-- <li><a href="{{ url('/home') }}">Home</a></li> --}}
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/admin/account/edit') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Account</a></li>
                                <li><a href="{{ url('/admin/account/password') }}"><i class="fa fa-key" aria-hidden="true"></i> Change Password</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Log out</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script type="text/javascript" src="{{ url('/js/jquery.1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/bootstrap.min.js') }}"></script>
</body>
</html>

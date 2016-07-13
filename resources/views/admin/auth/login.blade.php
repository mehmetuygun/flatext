<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome.min.css') }}">
    <style type="text/css">
        body {
            background-color: #ececec;
        }
        #login {
            margin-top: 100px;
            width: 450px;
            margin-left: auto;
            margin-right: auto;
        }
        .panel-body {
            padding: 20px;
        }
        #forgot-password {
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="panel panel-primary" id="login">
        <div class="panel-heading">
             <h3 class="panel-title">Login</h3>
        </div>
        <div class="panel-body">
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <form method="POST" action="{{ url('/admin/login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success form-control">Sign In</button>
                </div>
                <a id="forgot-password" href="{{ url('/admin/password/reset') }}" class="btn btn-link">Forgot your password?</a>
            </form>
        </div>
    </div>

    <!-- JavaScripts -->
    <script type="text/javascript" src="{{ url('/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/jquery.1.11.3.min.js') }}"></script>
</body>
</html>

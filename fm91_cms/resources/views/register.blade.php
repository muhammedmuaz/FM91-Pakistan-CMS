<!DOCTYPE html>
<html lang="en">

<head>
    <title>Datta Able Free Bootstrap 4 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('/images/favicon.ico') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

</head>

<body class='login_page'>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            @if($errors->any())
            <div class="form-group">
                <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $err)
          <li>{{$err}}</li>
          @endforeach
        </div>
            @endif
            <form action="/registerUser" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body text-center">

                        <div class="mb-4">
                            <i class="feather icon-unlock auth-icon"></i>
                        </div>

                        <h3 class="mb-4">Register</h3>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="email" placeholder="Username">
                        </div>

                        <div class="input-group mb-4">
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>

                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                                <label for="checkbox-fill-a1" class="cr">Save Details</label>
                            </div>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4" name="Login" type="submit">Login</button>
                        <p class="mb-2 text-muted">Forgot password? <a href="/forgotPassword">Reset</a></p>
                        <!-- <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html">Signup</a></p> -->
                    </div>
                </div>
        </div>
    </div>
    </form>
    </div>
    </div>

    <!-- Required Js -->
    <script src="{{ asset('/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>

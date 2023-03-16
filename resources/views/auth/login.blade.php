<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <title>FPT Education</title>

    <link rel="icon" type="image/x-icon" href="/images/edn-favicon.png" />
    <link rel="shortcut icon" type="image/x-icon" href="/images/edn-favicon.png" />

    <link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="/lib/line-awesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="/css/site.css" />
</head>
<body class="identity-site">

<h1 id="site-logo"> <img src="/images/Logo_Đại_học_FPT.png" width="250px" height="100px" alt="FPT-Education"/></h1>
<main id="wrap-main-content">
    <div class="identity-tabs">
        <a class="btn btn-secondary active" href="/vi/Account/Login">Login</a>
    </div>
    <form class="indentity-form" action="{{ route('login') }}" method="post">
        @csrf
        <div class="wrap-form-field">
            <div class="form-group group-width-icon">
                <i class="la la-user"></i>
                <input class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                       autocomplete="email" type="text" id="Email" value="{{old("email")}}" name="email" required>
            </div>
        </div>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="wrap-form-field">
            <div class="form-group group-width-icon">
                <i class="la la-lock"></i>
                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password">
            </div>
        </div>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <button class="btn btn-primary edn-btn-login" name="button" value="login">Log In</button>
        <a class="btn return-home-page text-bold" href="#" title="EduNext">Forgotten password?</a>
    </form>
</main>
<script src="/lib/jquery/dist/jquery.slim.min.js"></script>
<script src="/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

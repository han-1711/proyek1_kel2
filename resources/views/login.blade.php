<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login_admin</title>
    <link rel="stylesheet" href="{{asset('theme_login/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme_login/css/Login-Form-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('theme_login/css/styles.css')}}">
</head>

<body>
    <section class="login-clean" >
        <form method="post" style="padding: 56px;background:  rgba(255,255,255,0.94);">
            <h1 style="text-align: center;">Grosir Usaha</h1>
            <div class="illustration"></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(32,39,103);">Log In</button></div>
            <a class="forgot" href="#">Registrasi</a>
            <a class="forgot" href="#">Forgot your email or password?</a>
        </form>
    </section>
    <script src="{{asset('theme_login/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
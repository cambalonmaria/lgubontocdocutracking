<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Signin Template · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/signin.css') !!}" rel="stylesheet">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center" style="background-color: teal;">
    
    <main class="form-signin">

        <form method="post" action="http://docutrack.test/register">

        <input type="hidden" name="_token" value="TKI7O0azbW0Wd07BLN7OaKVpuKTjAsl9ek2uSe5Z">
        <img class="mb-4" src="http://docutrack.test/images/bootstrap-logo.svg" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="" placeholder="name@example.com" required="required" autofocus="">
            <label for="floatingEmail">Email address</label>
                    </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="" placeholder="Username" required="required" autofocus="">
            <label for="floatingName">Username</label>
                    </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
                    </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
                    </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
        <p class="mt-5 mb-3 text-muted">© 2023</p>    </form>
       
    </main>
    

</body>
</div>
</html>
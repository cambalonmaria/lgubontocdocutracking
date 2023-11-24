
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Document Tracking System</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="asset/css/adminlte.min.css">
      <meta name="csrf-token" content="{{ csrf_token() }}">
   </head>
   
   <h1 style="color: #FFFFFF; text-shadow: #D4AF37;" > <B>Document Tracking System </B></h1>
   
   <br>
   <body class="hold-transition login-page" style="background-color: teal;">
      <div class="login-box"  style="color: #8E7618;">  
         <!-- /.login-logo -->
          @yield('content')
   </body>
</html>

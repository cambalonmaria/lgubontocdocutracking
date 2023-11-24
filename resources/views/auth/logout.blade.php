<!DOCTYPE html>
<html>
<head>
    <title>Laravel Custom Logout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body> 
   
  <div class="container">
    <h2>Laravel Custom Logout</h2>
    <div class="card">
      <div class="card-header">Laravel Custom Logout</div>
      <div class="card-body"><div class="col-md-12 text-center">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="button" class="btn btn-primary">Logout</button>
              </form>
          </div></div> 
    </div>
  </div>

</body>
</html>


<!DOCTYPE html>
<html>
 <head>
  <title>Simple Login System in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/cutom.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 </head>
 <body id="login_body">
  <br />
  <div class="container box">
   <h3 align="center">SSC Login</h3><br />

   @if(isset(Auth::user()->email))
    <script>window.location="/dashboard";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="post" action="{{ url('/checklogin') }}">
    {{ csrf_field() }}
    <div >
     <input type="email" name="email" class="form-control"  placeholder="Email" />
    </div>
    <div class="form-group">
  
     <input type="password" name="password" class="form-control" placeholder="Password"/>
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Login"  />
    </div>

    <p class="loginhere">
    Need an account? <a href="/register" class="loginhere-link">Sign up here</a>
    </p>
   </form>
  </div>
 </body>
</html>

  

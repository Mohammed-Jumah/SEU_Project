
<!DOCTYPE html>
<html>
 <head>
  <title>Simple Sign up System in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/cutom.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 </head>
 <body id="login_body">
  <br />
  <div class="container box">
   <h3 align="center">SSC Register</h3><br />

  

   <form method="POST" action="/register">
   @csrf <!-- {{ csrf_field() }} -->

    <div class="form-group">
     <input type="name" name="name" class="form-control"  placeholder="Your Name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
         @error('name')
         <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
         @enderror
    </div>

    <div class="form-group">
     <input type="email" name="email" class="form-control"  placeholder="Your Email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
         @error('email')
         <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
         @enderror
    </div>

    <div class="form-group">
     <input type="password" name="password" class="form-control" placeholder="Your Password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
         @error('password')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
         @enderror
    </div>

    <div class="form-group">
     <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required autocomplete="new-password"/>
    </div>

    <div class="form-group">
     <input type="submit" name="submit" class="btn btn-primary" value="Register"/>
    </div>

    <p class="loginhere">
     Have already an account ? <a href="/" class="loginhere-link">Login here</a>
    </p>
   </form>
  </div>
 </body>
</html>
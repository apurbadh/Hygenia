<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/login.css" />
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="login">
         <div class="container">
             @error("email")
                 <div class="alert alert-danger" role="alert">
                   {{ $message }}
                </div>
             @enderror
             @error("password")
                 <div class="alert alert-danger" role="alert">
                   {{ $message }}
                </div>
             @enderror
              <h1>Register</h1>
              <form action="" method="POST">
                  @csrf
                  <input type="text" placeholder="Name" value="{{ old("name") }}" name="name">
              <input type="email" placeholder="Email" value="{{ old("email") }}" name="email">
              <input type="password" placeholder="Password" value="{{ old("password") }}" name="password"><br>
              <input type="password" placeholder="Confirm Password" name="password_confirmation"><br>
              <button type="submit">Register</button>
              </form> 
              <div class="clearfix"></div>
         </div>
      </div>
      <div class="register">
          <div class="container">
              <i class="fas fa-user-plus fa-5x"></i>
              <h2>Hello,friend!</h2>
              <p>Enter your personal details and start journey with us</p>
              <a href="/login"><button>Login <i class="fas fa-arrow-circle-right"></i></button></a>
          </div>
      </div>  
    </div>
  </body>
</html>
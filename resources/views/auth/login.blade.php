<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/login.css" />
    <title>Login</title>
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
              <h1>Log in</h1>
              <form action="" method="POST">
                  @csrf
              <input type="email" placeholder="Email" value="{{ old("email") }}" name="email" required>
              <input type="password" placeholder="Password" value="{{ old("password") }}" name="password" required><br>
              <button type="submit">Log in</button>
              </form>
              <div class="clearfix"></div>
         </div>
      </div>
      <div class="register">
          <div class="container">
              <i class="fas fa-user-plus fa-5x"></i>
              <h2>Hello,there!</h2>
              <p>Login to continue your further process to consult with the DOC</p>
              <a href="/register"><button>Register <i class="fas fa-arrow-circle-right"></i></button></a>
          </div>
      </div>
    </div>
  </body>
</html>

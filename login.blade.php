<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>.:Login!:.</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

<link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background: #fffff5">
    <main class="form-signin w-100 m-auto">
      @if (session('logout'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session('logout')}}</strong>
            </div>
      @endif
      <form action="/user/ceklogin" method="POST">
          @csrf 
          <img class="mb-4" src="https://fbis.ukdw.ac.id/wp-content/uploads/2021/06/Logo_UKDW_big.png" alt="logo ukdw" width="200" height="275">  
          <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

          <div class="form-floating">
          <input type="text" name="username" class="form-control" id="floatingInput"
          @error('username')
              is-invalid
          @enderror>
          @error('username')
              <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <label for="floatingInput">Username</label>
          </div>

          <div class="form-floating mt-2">
          <input type="password" name="password" class="form-control" id="floatingPassword"
          @error('password')
              is-invalid
          @enderror>
          @error('password')
              <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <label for="floatingPassword">Password</label>
          </div>

          <button class="w-100 btn btn-lg btn-warning" type="submit">Log in</button>
          <p class="text-center text-muted mt-3 mb-0"><a href="/signup" class="fw-bold text-body"><u>Sign-up</u></a></p>
          <p class="mt-3 mb-3 text-muted">&copy; thea - 2022</p>
      </form>
    </main>
  </body>
</html>

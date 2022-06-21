<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>.:Sign Up!:.</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background: #fffff5">
    <main class="form-signin w-100 m-auto">
      <div class="card">
        <div class="card-body">
          <form action="/signup/create/user" method="POST">
            @csrf 
            <h1 class="h3 mb-3 fw-normal">Buat Akun!</h1>
            <div class="form-floating">
              <input type="text" name="nama_user" class="form-control" id="floatingInput">
              <label for="floatingInput">Nama User</label>
            </div>
  
            <div class="form-floating mt-2">
              <input type="text" name="username" class="form-control" id="floatingInput">
              <label for="floatingInput">Username</label>
            </div>
  
            <div class="form-floating mt-2">
            <input type="password" name="password" class="form-control" id="floatingPassword">
            <label for="floatingPassword">Password</label>
            </div>
  
            <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>
            <p class="text-center text-muted mt-3 mb-0">Sudah Memiliki Akun? <a href="/login" class="fw-bold text-body"><u>Login here</u></a></p>
            <p class="mt-5 mb-3 text-muted">&copy; SPK - 2022</p>
        </form>
        </div>
      </div>
    </main>
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link rel="stylesheet" href="/css/signin.css">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    


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
  <body class="text-center">
    
<main class="form-signin">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Register</h1>

    <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Name" name="name" required value="{{ old('name') }}">
      <label for="floatingInput">Name</label>
      @error('name')
      <div  class="invalid-feedback">
      {{ $message }}
    </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Username" name="username" required value="{{ old('username') }}">
      <label for="floatingInput">Username</label>
      @error('username')
      <div  class="invalid-feedback">
      {{ $message }}
    </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="Email Address" name="email" required value="{{ old('email') }}">
      <label for="floatingInput">Email address</label>
      @error('email')
      <div  class="invalid-feedback">
      {{ $message }}
    </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required value="{{ old('password') }}">
      <label for="floatingPassword">Password</label>
      @error('password')
      <div  class="invalid-feedback">
      {{ $message }}
    </div>
      @enderror
    </div>

    <p>Already have account? <a href="/login">Login here</a></p>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p><a href="/">Back to post</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>


    
  </body>
</html>

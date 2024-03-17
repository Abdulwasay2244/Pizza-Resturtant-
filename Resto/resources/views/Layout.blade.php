<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resturtant App </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header>
    <nav class="navbar navbar-expand-sm navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">RESTO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
              <a class="nav-link active" href="/List">List</a>
              <a class="nav-link active" href="/add">Add</a>
              <a class="nav-link active" href="/Search">Search</a>
            
              {{-- <a class="nav-link active" href="/login">Login</a>
              <a class="nav-link active" href="/register">Register</a> --}}

              @if(Session::get('users'))
             
                <a class="nav-link active" href="#"> Wellcome | {{Session::get('users')}}</a>
          
              @else
              <a class="nav-link active" href="/login">Login</a>
              <a class="nav-link active" href="/register">Register</a>
              @endif
            
       
            </div>
          </div>
        </div>
      </nav>
</header>
<body>
    <div class="container">
        @yield('content') 
    </div>

    <footer>
        {{-- copy rights by 2024 Resturtant App --}}
    </footer>
</body>
</html>
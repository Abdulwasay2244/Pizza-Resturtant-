<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <style>
        .hom{
            text-align: center;
            color: rgb(15, 39, 177)
        }
    </style>
</head>
<body>
@extends('Layout')
@section('content')

<div>
    <h1 class="hom">Login users</h1>
<div class="col-sm-8">
    <form method="post" action="login">
        @csrf
        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="text" name="Email" class="form-control" placeholder="Enter Your Email">
          </div>
        <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password"  name="password" class="form-control" placeholder="Enter Your Password">
          </div>
          <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
</div>
    
@endsection
</body>
</html>
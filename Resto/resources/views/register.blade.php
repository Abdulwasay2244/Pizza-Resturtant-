<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
    <h1 class="hom">Users Register page</h1>
<div class="col-sm-8">
    <form method="post" action="register">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="Name" class="form-control" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="text" name="Email" class="form-control" placeholder="Enter Your Email">
          </div>
        <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password"  name="password" class="form-control" placeholder="Enter Your Password">
          </div>
          <div class="form-group">
            <label class="form-label">Contact</label>
            <input type="text"  name="Contact" class="form-control" placeholder="Enter Contact Number">
          </div>
          <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
</div>
    
@endsection
</body>
</html>
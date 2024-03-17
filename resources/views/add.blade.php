<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <style>
        .Add{
            text-align: center;
            color: rgb(194, 167, 51)
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
@extends('Layout')
@section('content')


<div>
    <h1 class="Add">Add New Resturtant</h1>

    <form method="post" action="add">
        @csrf
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="Name" class="form-control" placeholder="Enter Your Name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="Email" class="form-control" placeholder="Enter Your Email">
          </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text"  name="Address" class="form-control" placeholder="Enter Your Address">
          </div>
       
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
 </div>
 @endsection
</body>
</html>
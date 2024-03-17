<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <style>
        .Add{
            text-align: center;
            color: rgb(194, 167, 51)
        }
    </style>
</head>
<body>
    
@extends('Layout')
@section('content')


<div>
    <h1 class="Add">Edit Resturtant</h1>

    <form method="post" action="/edit">
        @csrf
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="hidden"  name="id" value="{{$data->id}}">

          <input type="text" name="Name" class="form-control"  value="{{$data->Name}}"  placeholder="Enter Your Name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="Email" class="form-control"  value="{{$data->Email}}" placeholder="Enter Your Email">
          </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text"  name="Address" class="form-control"  value="{{$data->Address}}" placeholder="Enter Your Address">
          </div>
       
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
 </div>
 @endsection
</body>
</html>
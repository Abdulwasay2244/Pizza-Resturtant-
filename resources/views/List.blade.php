<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

    <style>
        .list{
            text-align: center;
            color: rgb(194, 167, 51)
        }
    </style>
</head>
<body>
@extends('Layout')
@section('content')


<div>
    <h1 class="list">List of Resturtant</h1>
    @if (Session::get('status'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations Resturtant Submitted Successfully</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($data as $item)
          <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->Name}}</td>
              <td>{{$item->Email}}</td>
              <td>{{$item->Address}}</td>
              <td>
                <a href="{{ url('delete/'.$item->id) }}"><i class="fa fa-trash"></i></a>
                <a href="{{ url('edit/'.$item->id) }}"><i class="fa fa-edit"></i></a>
              </td>
              
          </tr>
      @endforeach
      
        </tbody>
      </table>

    {{-- <p>{{$item->Name}}</p> --}}
 </div>
    
@endsection
</body>
</html>
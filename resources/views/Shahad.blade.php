@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
    </style>
</head>
<body>

<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <img src="{{$d->thumbnail}}" width="200" height="150" > 
                </div>
                <div class="col-sm-6">
                    <h2>{{$d->title}}</h2>
                    <ul class="unstyle">
                        <li >Description: {{$d->description}}</li>
                        <li>Brand: {{$d->brand}} </li>
                        <li >category: {{$d->category}} </li>
                        <li >Rating: {{$d->rating}} </li>
                    </ul>
                    
                    <p class="mt-3">@foreach($d->images as $img)
                        <img src="{{$img}}" width="70" height="50">
                        @endforeach</p>
                </div>
                <div class="col-sm-3">
                    <ul>
                        <li >Price:{{$d->price}}</li>
                        <li >DiscountPercentage: {{$d->discountPercentage}} </li>
                        <li >Stock:{{$d->stock}}</li>
                    </ul>
                   
                        <button type="button" class="btn btn-dark mt-5">Details</button>
                  
                </div>
                
            </div>
        </div>
    </div>
    

</div>

    <!-- {{$d->id}} -->
    <!-- {{$d->title}}
    @foreach($d->images as $img)
    <img src="{{$img}}" width="40" height="40">
    @endforeach
    <h1>welcome !!!</h1> -->
</body>
</html>
@endsection

@extends('layout')
@section('content')
<form action="{{route('comics.update',$comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    {{$comic['title']}}
  <label  for="title">Title:</label><br>
  <input value="{{$comic['title']}}" type="text" id="title" name="title" ><br>
  <label for="description">description:</label><br>
  <input  value="{{$comic['description'] }}" type="text" id="description" name="description" ><br>
  <label   for="thumb">thumb:</label><br>
  <input value="{{$comic['thumb'] }}" type="text" id="thumb" name="thumb"  ><br>
  <label  for="price">price:</label><br>
  <input value="{{$comic['price'] }}" type="text" id="price" name="price" ><br>
  <label   for="series">series:</label><br>
  <input value="{{$comic['series'] }}" type="text" id="series" name="series" ><br>
  <label  for="type">type:</label><br>
  <input  value="{{$comic['type'] }}" type="text" id="type" name="type" ><br>
  <label  for="sale_date">sale_date:</label><br>
  <input value="{{$comic['sale_date'] }}" type="text" id="sale_date" name="sale_date"  ><br><br>
  <input type="submit" value="Submit">
</form> 


@endsection
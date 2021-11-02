@extends('layout')
@section('content')
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    @method('POST')
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" ><br>
  <label for="description">description:</label><br>
  <input type="text" id="description" name="description" ><br>
  <label for="thumb">thumb:</label><br>
  <input type="text" id="thumb" name="thumb"  ><br>
  <label for="price">price:</label><br>
  <input type="text" id="price" name="price" ><br>
  <label for="series">series:</label><br>
  <input type="text" id="series" name="series" ><br>
  <label for="type">type:</label><br>
  <input type="text" id="type" name="type" ><br>
  <label for="sale_date">sale_date:</label><br>
  <input type="text" id="sale_date" name="sale_date"  ><br><br>
  <input type="submit" value="Submit">
</form> 


@endsection
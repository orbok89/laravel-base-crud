@extends('layout')
@section('content')
    <table>
    <tr><td>ID</td><td>Title</td><td>thumb</td><td>Price</td><td>Series</td><td>sale_date</td><td>Type</td><td>Cancella e modifica</td></tr>
    @foreach ($comics as $comic)
    <tr><td>{{$comic['id']}}</td><td><a href="{{route('comics.show', $comic['id'])}}">{{$comic['title']}}</a></td><td>{{$comic['thumb']}}</td><td>{{$comic['price']}}</td><td>{{$comic['series']}}</td><td>{{$comic['sale_date']}}</td><td>{{$comic['type']}}</td>
    <td><a href="{{route('comics.edit', $comic['id'])}}">modifica fumetto</a></td></tr>
    @endforeach
    </table>
@endsection
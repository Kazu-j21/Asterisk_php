@extends('master')

@section('content')
    <form action="/books/{{$book->id}}/update" method="post">
        @csrf
        <h1>Editing Book #{{$book->id}}</h1>
        <p>Title: <input type="text" value="{{$book->title}}" name="title"></p>
        <p>Description: <input type="text"  value="{{$book->description}}" name="description"></p>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="/books">Back</a>
    </form>   
@endsection
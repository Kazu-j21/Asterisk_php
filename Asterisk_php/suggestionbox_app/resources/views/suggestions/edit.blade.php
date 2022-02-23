@extends('master')

@section('content')
    <form action="{{route('suggestions.update', ['id'=>$suggestion->id])}}" method="post">
        @method('PATCH')
        @csrf
        <h1>Editting Suggestion #{{$suggestion->id}}</h1>
        <p>Content: <input type="text" value="{{$suggestion->content}}" name="c"></p>
        <p>Author: <input type="text" value="{{$suggestion->author}}" name="a"></p>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="/suggestions/index" class="btn btn-secondary">Back</a>
    </form>
    
@endsection
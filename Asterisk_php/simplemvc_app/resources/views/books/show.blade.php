@extends('master')

@section('content')
    <h1>Book#{{$book->id}}: {{$book->title}}</h1>
    <h2>{{$book->description}}</h2>
    <p>{{$test}}</p>
@endsection
@extends('master')

@section('content')
    <h1>List of all the books title</h1>
    <a href="books/create">add a book list </a>
    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach($listOfbooks as $book)
          <tr>
            <td> <a href="/books/{{$book->id}}">{{$book->id}}</a></td>
            <td>{{$book->title}}</td>
            <td>{{$book->description}}</td>
            <td>
                <a class="btn btn-warning" href="/books/{{$book->id}}/edit">Edit</a>
                <a class="btn btn-danger" href="/books/{{$book->id}}/delete">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>
@endsection
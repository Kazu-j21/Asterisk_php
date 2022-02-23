@extends('master')

@section('content')
    <h1>Add a Suggestion</h1>
    <form action="{{route('suggestions.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Content:</label>
            <input type="text" class="form-control" name="content">
        </div>
        <div class="form-group">
            <label for="">Author:</label>
            <input type="text" class="form-control" name="author">
        </div>
       <button type="submit" class="btn btn-success">Add</button>
       <a href="/suggestions/index" class="btn btn-secondary">Back</a>
    </form>
@endsection
@extends('master')

@section('content')
    <div>
        <h2>Create a Book</h2>
        <form action="/books/new" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-contol" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-contol" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="/books" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
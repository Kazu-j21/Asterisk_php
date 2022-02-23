@extends('master')

@section('style')
<style>
    .title{
        text-align: center;
    }
</style>
@endsection
@section('content')
    <div class="title">
        <h1>List of all the Suggestions</h1>
        <a href="/">Add a suggestion</a>
    </div>
   <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Content</th>
                <th>Vote</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listOfsuggestions as $suggestion)
                <tr>
                    <td><a href="/suggestions/{{$suggestion->id}}">{{$suggestion->id}}</a></td>
                    <td>{{$suggestion->author}}</td>
                    <td>{{$suggestion->content}}</td>
                    <td>
                        <div class="d-inline-flex">
                        <span class="my-auto mx-2">{{$suggestion->votes()->count()}}</span>
                        <a href="{{ route('upvote', ['suggestion_id' => $suggestion->id]) }}" class="btn btn-dark">Upvote</a>
                            <form action="{{ route('downvote', ['suggestion_id'=> $suggestion->id]) }}" method="post"> 
                                @method('DELETE')
                                @csrf
                               
                                <input type="{{$suggestion->votes()->count()<1 ? 'button' : 'submit'}}" class="btn btn-secondary {{$suggestion->votes()->count()<1 ? 'disabled' : ''}}" value="Downvote">
                            </form>
                        </div>
                    </td>
                    <td>
                    <div class="d-inline-flex">
                       <a class="btn btn-warning" href="/suggestions/{{$suggestion->id}}/edit">Edit</a>
                    {{-- <form action="/suggestions/{{$suggestion->id}}/delete" method="post"> --}}
                        <form action="{{route('suggestions.delete', ['id' =>$suggestion->id])}}" method="post">
                            {{-- {{Method Spoofing}} --}}
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                       </form>
                    </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
   </table>
@endsection

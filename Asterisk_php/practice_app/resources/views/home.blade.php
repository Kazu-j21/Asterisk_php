@extends('welcome')

@section("content")

<div>
    HELLO I AM A DIV

    @include("sub-view", ["parameter" => "I am a parameter!!!"])
</div>

@endsection

@section("bottom-content")
    <div class="row">
      I AM A FOOTER
    </div>
@endsection
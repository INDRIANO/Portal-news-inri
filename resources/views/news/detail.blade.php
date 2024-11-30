@extends('layouts.master')

@section('content')
<div class="container paddding">
    <img src="{{$asset('/uploads'.$news->thumbnail)}}" width="100" height="500px" alt="">
    <div class="my-3">
        <h1 class="text-primary">{{$news->title}}</h1>

        <span class="badge-primary">
            <a href="/categories/{{$news->category->id}}" style="text-decoration: none;">{{$news->category->name}}</a>
        </span>
        <hr>
        <p>{{$news->content}}</p>
        <hr>
        <a href="/" class="btn btn-lg btn-secondary">Home</a>
    </div>
</div>
@endsection
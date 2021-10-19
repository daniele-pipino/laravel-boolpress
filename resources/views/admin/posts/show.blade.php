@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
              <h1 class="card-title">{{$post->title}}</h1>
              <h4 class="card-subtitle mb-2 text-muted">Author: {{$post->author}}</h4>
              <p class="card-text">{{$post->content}}</p>
              <a href="{{route('admin.posts.index')}}" class="btn btn-outline-secondary">Go Back</a>
            </div>
          </div>
    </div>
@endsection
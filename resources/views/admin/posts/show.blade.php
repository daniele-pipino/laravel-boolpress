@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
              <h1 class="card-title">{{$post->title}}</h1>
              <h4 class="card-subtitle mb-2 text-muted">Author: @if ($post->user)
                {{$post->user->name}}
              @else
                  Anonimo
              @endif</h4>
              <p class="card-text">{{$post->content}}</p>
              @if ($post->category)
                <p class="card-text">Category: {{$post->category->name}}</p>
              @else 
              <p class="card-text">Category: Sconosciuta</p>
              @endif
              <a href="{{route('admin.posts.index')}}" class="btn btn-outline-secondary">Go Back</a>
            </div>
          </div>
    </div>
@endsection
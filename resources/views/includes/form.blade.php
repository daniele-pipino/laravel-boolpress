@extends('layouts.app')
@section('content')
    <div class="container">
      @if ($post->id)
          <h1 class="text-center">Modifica Post</h1>
          <form action="{{route('admin.posts.update',$post->id)}}" method="post">
            @method('patch')
      @else
          <h1 class="text-center">Crea Post</h1>
          <form action="{{route('admin.posts.store')}}" method="post">
      @endif
          @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" placeholder="Inserisci il titolo">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="{{$post->author}}" placeholder="Inserisci l'autore">
            </div>
            <div class="form-group">
              <label for="content">Content</label>
              <textarea class="form-control" id="content" name="content" rows="3">{{$post->content}}</textarea>
            </div>
            <div>
              <label for="category">Category</label>
              <select name="category_id" id="category" class="form-control mb-3">
                <option value="null" selected>Nessuna Categoria</option> 
                 @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div>
              <button type="submit" class="btn btn-outline-primary">Salva</button>
            </div>
        </form>
        <div class="d-flex justify-content-end">

          <a href="{{route('admin.posts.index')}}" class="btn btn-outline-secondary">Go Back</a>
        </div>
    </div>
@endsection
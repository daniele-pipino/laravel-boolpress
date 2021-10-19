@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.posts.create')}}" class="btn btn-success">Crea</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Created at</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->author}}</td>
                    <td>{{$post->created_at}}</td>
                    <td class="d-flex justify-content-end">
                        <a href="{{route('admin.posts.show',$post->id)}}" class="btn btn-primary">Vedi</a>
                        <a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-warning ml-2">Modifica</a>

                    </td>
                </tr>
            @empty
              <tr> <td class="text-center" colspan="4" >Non ci sono post</td> </tr>
            @endforelse
        </tbody>
      </table>
</div>  
@endsection
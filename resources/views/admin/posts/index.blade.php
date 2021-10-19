@extends('layouts.app')
@section('content')
<div class="container">
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
                    <th scope="row">1</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->author}}</td>
                    <td>{{$post->created_at}}</td>
                </tr>
            @empty
              <tr> <td class="text-center" colspan="4" >Non ci sono post</td> </tr>
            @endforelse
        </tbody>
      </table>
</div>  
@endsection
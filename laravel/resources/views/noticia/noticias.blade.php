@extends('layout.main')

@section('content')

@foreach($posts as $post)
<div class="jumbotron">
  <h2>{{$post->nm_titulo}}</h2>
  <p>{{$post->ds_post}}</p>
  <p><a class="btn btn-primary btn-lg" href="/noticia/{{$post->id_post}}/show" role="button">Learn more</a></p>
</div>
@endforeach

@endsection
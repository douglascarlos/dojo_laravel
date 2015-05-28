@extends('layout.main')

@section('content')

<div class="content">
  <div class="media">
    <div class="media-body">
    	<h2 class="media-heading text-primary">{{$post->nm_titulo}}</a></h2>
      <h6>Adicionado em {{$post->created_at->format('d/m/y \à\s H:i')}}</h6>
    	<p>{{$post->ds_post}}</p>
    </div>
  </div>
</div>

<div class="panel panel-default">
  
  <div class="panel-heading">
    <h4>Comentários</h4>
  </div>

  <ul class="list-group">
    @foreach($post->comentarios as $comentario)
      <li class="list-group-item">
        <p>
          Por <b>{{$comentario->nm_email}}</b> em {{$comentario->created_at->format('d/m/y \à\s H:i')}}
        </p>
        <p>{{$comentario->ds_comentario}}</p>
      </li>
    @endforeach
  </ul>

  <div class="panel-body">
    <p><b>Faça o seu cometário:</b></p>

  </div>

</div>

@endsection
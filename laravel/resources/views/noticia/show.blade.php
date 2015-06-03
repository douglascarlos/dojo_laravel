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
    <h4>Comentários <span class="badge">{{count($post->comentarios)}}</span> </h4>  
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
    @include('noticia.erro')
    <form action="/noticia/{{$post->id_post}}/comentar" method="post">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

      <div class="form-group">
        <input name="nm_email" type="text" placeholder="Email" class="form-control" />
      </div>
       
      <div class="form-group">
        <textarea name="ds_comentario" class="form-control" rows="6" placeholder="Digite aqui seu comentário..."></textarea>
      </div>

       <p class="text-right">
          <button type="submit" class="btn btn-primary">Comentar</button>
      </p>
    </form >
  </div>

</div>

@endsection
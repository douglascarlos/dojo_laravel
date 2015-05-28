@extends('layout.main')

@section('content')

<div class="media">

  	<div class="media-body">
    	<h2 class="media-heading">	
    		{{$post->nm_titulo}}
    		</a>
    	</h2><span class="">{{$post->created_at->format('d/m/y \à\s H:i')}}</span>
    	<p>
        {{$post->ds_post}}
      </p>
  	</div>
  	
</div>

<div class="content">
  <h4>Comentários</h4>
  @foreach($post->comentarios as $comentario)
    <p><b>Email: {{$comentario->nm_email}}</b></p>
    <p>Criado em {{$comentario->created_at->format('d/m/y \à\s H:i')}}</p>
    <p>Comentario: {{$comentario->ds_comentario}}</p>
    <br>
  @endforeach
</div>

@endsection
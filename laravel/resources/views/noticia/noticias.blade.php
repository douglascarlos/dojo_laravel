@extends('layout.main')

@section('content')

<div class="media">

	@foreach($posts as $post)
  	<div class="media-body">
    	<h4 class="media-heading">
    		<a class="" href="/noticia/{{$post->id_post}}/show" role="button">
    		{{$post->nm_titulo}}
    		</a>
    	</h4>
    	{{$post->ds_post}}
  	</div>
  	<br>

  	@endforeach
</div>

@endsection
@extends('layout.main')
@section('content')

sss
 <div class="content">
	<form action="/categoria/{{ $categoria->id_categoria }}/update" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		 <div class="form-group">
	            <label for="exampleInputPassword1">Categoria</label>
	            <input class="form-control" name="nm_categoria" type="text" value="{{$categoria->nm_categoria}}">
	        </div>

	      <div class="form-group">
	            <label for="exampleInputPassword1">Categoria</label>
	            <textarea name="ds_categoria" class="form-control">{{$categoria->ds_categoria}}</textarea>
	        </div>

		  <p class="text-right">
	            <button type="submit" class="btn btn-primary">Editar</button>
	            <a class="btn btn-primary" href="/categoria" role="button">Voltar</a>
	        </p>
		
	</form>
</div>
@endsection
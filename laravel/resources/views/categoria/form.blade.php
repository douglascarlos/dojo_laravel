<form action="/categoria/save" method="post">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<input type="hidden" name="id" value="{{$categoria->id_categoria}}"
	 <div class="form-group">
            <label for="exampleInputPassword1">Categoria</label>
            <input class="form-control" name="nm_categoria" type="text" value="{{$categoria->nm_categoria}}">
        </div>

      <div class="form-group">
            <label for="exampleInputPassword1">Descrição da categoria</label>
            <textarea name="ds_categoria" class="form-control">{{$categoria->ds_categoria}}</textarea>
        </div>

	  <p class="text-right">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-primary" href="/categoria" role="button">Voltar</a>
        </p>
	
</form>
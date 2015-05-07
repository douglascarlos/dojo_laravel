@extends('layout.main')

@section('content')
<div class="content">
    <form action="/post/store" method="post">
        
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label for="exampleInputPassword1">Post</label>
            <textarea name="ds_post" class="form-control" rows="3" placeholder=""></textarea>
        </div>

        <p class="text-right">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-primary" href="/post" role="button">Voltar</a>
        </p>
    </form>
</div>
@stop

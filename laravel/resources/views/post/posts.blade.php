@extends('layout.main')

@section('content')
<p class="text-right">
   <a class="btn btn-primary" href="/post/create" role="button">
      <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Criar Post
   </a>
</p>

<div class="panel panel-primary">
   <div class="panel-heading">
      Lista de Posts
   </div>
   
   <table class="table table-hover">
      <thead>
         <tr>
            <td align="center">#</td>
            <td>Post</td>
            <td>Categoria</td>
            <td align="center">Cadastro</td>
            <td align="center">Atualização</td>
            <td>Editar</td>
            <td>Excluir</td>
         </tr>
      </thead>
      <tbody>
         @foreach ($posts as $post)
         <tr>
            <td width="1%" align="center">{{ $post->id_post }}</td>
            <td width="">{{ $post->ds_post }}</td>
            <td width="">{{ $post->categoria->nm_categoria}}</td>
            <td width="12%">{{ $post->created_at->format('d/m/y \à\s H:i') }}</td>
            <td width="12%">{{ $post->updated_at->format('d/m/y \à\s H:i') }}</td>
            <td width="1%" align="center">
               <a class="btn btn-default" href="/post/{{ $post->id_post }}/edit" role="button">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
               </a>
            </td>
            <td width="1%" align="center">
               <a class="btn btn-default" href="/post/{{ $post->id_post }}/delete" role="button">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
               </a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
@endsection
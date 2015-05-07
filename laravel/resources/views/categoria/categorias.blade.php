@extends('layout.main')

@section('content')

<p class="text-right">
   <a class="btn btn-primary" href="/categoria/create" role="button">
      <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Criar Categoria
   </a>
</p>

<div class="panel panel-primary">
   <div class="panel-heading">
      Lista de Categorias
   </div>
   
   <table class="table table-hover">
      <thead>
         <tr>
            <td align="center">#</td>
            <td>Categoria</td>
            <td>Descrição</td>
            <td align="center">Cadastro</td>
            <td align="center">Atualização</td>
            <td>Editar</td>
            <td>Excluir</td>
         </tr>
      </thead>
      <tbody>
         @foreach ($categorias as $categoria)
         <tr>
            <td width="1%" align="center">{{ $categoria->id_categoria }}</td>
            <td width="">{{ $categoria->nm_categoria }}</td>
            <td width="">{{ $categoria->ds_categoria }}</td>
            <td width="12%">{{ $categoria->created_at->format('d/m/y \à\s H:i') }}</td>
            <td width="12%">{{ $categoria->updated_at->format('d/m/y \à\s H:i') }}</td>
            <td width="1%" align="center">
               <a class="btn btn-default" href="/categoria/{{ $categoria->id_categoria }}/edit" role="button">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
               </a>
            </td>
            <td width="1%" align="center">
               <a class="btn btn-default" href="/categoria/{{ $categoria->id_categoria }}/delete" role="button">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
               </a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
@endsection
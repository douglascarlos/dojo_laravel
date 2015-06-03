<?php namespace App\Http\Controllers;
use App\Http\Requests\ComentarioRequest;

//use App\Http\Controllers\Controller;
//use App\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comentario;

class ComentarioController extends Controller {

	public function __construct(){
		$this->middleware('guest');
	}

		public function save(ComentarioRequest $request, $id){
		$comentario = new Comentario();
		$comentario->fill($request->input());
		$comentario->id_post = $id;
		$comentario->save();

		return redirect("noticia/$id/show");


	}

}

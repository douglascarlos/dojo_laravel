<?php namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use App\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;

class CategoriaController extends Controller {

	public function __construct(){
		$this->middleware('guest');
	}

	public function index(){

		$categorias = Categoria::all();

		return view('categoria.categorias')->with('categorias', $categorias);
	}

	public function edit($id){

		$categoria = Categoria::find($id);

		return view('categoria.edit')->with('categoria', $categoria);


	}

	public function update(Request $request, $id){

		$categoria = Categoria::find($id);

		$categoria->nm_categoria = $request->get('nm_categoria');
		$categoria->ds_categoria = $request->get('ds_categoria');
		$categoria->save();

		return redirect('/categoria');

	}

}

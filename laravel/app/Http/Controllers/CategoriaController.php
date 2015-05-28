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

	public function save(Request $request){

		$categoria = Categoria::findOrNew($request->get("id"));
		$categoria->fill($request->input())->save();

		return redirect('/categoria');

	}

	public function create(){
		return view('categoria.create')->with('categoria', new Categoria());
	}

	public function destroy($id){
		Categoria::destroy($id);

		return redirect('/categoria')->with('alert', [ 
				'message' => 'Categoria excluída com sucesso', 
				'type' => 'success', 
				'before' => null, 
				'after' => null 
			]);
	}

}

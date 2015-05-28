<?php namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use App\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Categoria;
use App\Http\Requests\PostRequest;

class PostController extends Controller {

	public function __construct(){
		$this->middleware('guest');
	}

	public function index(){

		$posts = Post::all();

		return view('post.posts')
			->with('posts', $posts);
	}

	public function create(){
		$categorias = Categoria::all();
		$post = new Post();
		return view('post.create')->with('categorias', $categorias)->with('post', $post);
	}


	public function edit($id){

		$post = Post::find($id);

		$categorias = Categoria::all();

		if(!is_object($post)){
			return redirect('/post')
				->with('alert', [ 
					'message' => 'Post não encontrado', 
					'type' => 'danger', 
					'before' => null, 
					'after' => null
				]);
		}

		return view('post.edit')
			->with('post', $post)->with("categorias",$categorias);
	}

	public function save(Request $request){


		$post = Post::findOrNew($request->get("id"));
		$post->fill($request->input())->save();

		return redirect('/post')
			->with('alert', [ 
				'message' => 'Post alterado com sucesso', 
				'type' => 'success', 
				'before' => null, 
				'after' => null
			]);
	}

	public function destroy($id){

        Post::destroy($id);

        return redirect('/post')
        	->with('alert', [ 
				'message' => 'Post excluído com sucesso', 
				'type' => 'success', 
				'before' => null, 
				'after' => null 
			]);
    }

    public function noticia(){
    	$posts = Post::orderBy('created_at', 'DESC')->get();
    	return view('noticia.noticias')->with('posts', $posts);
    }

    public function show($id){
    	$post = Post::find($id);
    	return view('noticia.show')->with('post', $post);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\Asignatura;

class PostController extends Controller
{

    public function show_posts(){
        $posts = Post::all();
        return view('Pages.All_posts',['posts'=>$posts]);
    }

    public function show_create_post(){
        $asignaturas = Asignatura::all();
        $users = User::all();
        return view('Pages.AddPost',['users'=>$users,'asignaturas' =>$asignaturas]);
    }

   public  function create_post(Request $request){
        if($request['sel_users'] == "Selecciona un usuario"){
            $error_user_id = true;
           return redirect()->route('show_create_post',['error_user_id'=>$error_user_id]);
        }else{
        $post = new Post;
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->user_id = $request['sel_users'];
        $post->save();
        return redirect()->route('show_create_post');
        }
    /*  $usuario_id =$request['sel_users'];
        $post = new Post;
        $post->title = $request['title'];
        $post->content = $request['content'];
        $usuario = User::find($usuario_id);
        $usuario->post()->save($post);
    */
    }


   public function delete_post($id){
    
    $post = Post::find($id);
    $post->delete();
    return redirect()->route('show_posts');

   }



   public function show_eddit_post($id){
    $post = Post::find($id);
    return view('Pages.EdditPost',['post'=>$post]);
   }

   public function eddit_post(Request $request, $id){
        $post = Post::find($id);
        $post->title= $request['title'];
        $post->content= $request['content'];
        $post->save();
        return redirect()->route('show_posts'); 
    }
}

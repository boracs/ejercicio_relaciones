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
        
            $usuario_id =$request['sel_users'];
            $usuario = User::find($usuario_id);

            $post = new Post;
            $post->title = $request['title'];
            $post->content = $request['content'];
            $post->save();

            $asignaturas = $request['asignatura'];
            
            foreach($asignaturas as $asignatura){
                $post->asignaturas()->attach($asignatura);
            }
            $post->save();

            $usuario->post()->save($post);

            return redirect()->route('show_posts');
        }
    }


   public function delete_post($id){
    
    $post = Post::find($id);
    $post->delete();
    return redirect()->route('show_posts');

   }



   public function show_eddit_post($id){
    $asignaturas = Asignatura::all();
    $post = Post::find($id);
    return view('Pages.EdditPost',['post'=>$post, 'asignaturas'=>$asignaturas]);
   }

   public function eddit_post(Request $request, $id){


        $asignaturas = $request['asignatura'];

        $post = Post::find($id);
        $post->title= $request['title'];
        $post->content= $request['content'];
        $post->save();
        $post->asignaturas()->detach();
        foreach($asignaturas as $asignatura){
            $post->asignaturas()->attach($asignatura);
        }
        $post->save();

 

        return redirect()->route('show_posts'); 
    }

    public function show_posts_order($id){

        $posts= Post::where('user_id', $id)
                    ->orderBy('title', 'asc')
                    ->get();

    return view('Pages.ShowPostsId',['posts'=>$posts]);
    }



    public function recent_posts(){

       $ultimosPosts = Post::orderBy('created_at', 'desc')->take(12)->get();

    return view('Pages.Posts_recientes',['posts'=>$ultimosPosts]);
    }





}

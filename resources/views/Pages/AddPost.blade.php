@extends('layouts.Principal')


@section('title','show_posts')

@section('principal_section')

<h2 class="m-auto text-center mb-5" >  Create Post</h2>


<div id="cont_formulario_post">
    <form action="{{route('create_post')}}" method="POST">
        @csrf
        <select name="sel_users" id="">
            <option value="Selecciona un usuario">Selecciona un usuario</option>
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo</label>
            <input name ="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-floating">
            <textarea name ="content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Post ontent</label>
        </div>
        <div>
            @foreach($asignaturas as $asignatura)
            <label for="">{{$asignatura->name}}</label>   <input type="checkbox" name="asignatura" value="{{$asignatura->name}}">
            @endforeach
        </div>
        <button type="submit" class="mt-3 btn btn-primary">Submit</button>
    </form>
</div>


        <div id="cont_see_all_posts">
            <a href="{{route('show_posts')}}"><button type="submit" class="m-auto btn btn-success">See all Posts</button></a>
        </div>

            @if(isset($error_user_id))
            <p>Debes seleccionar un usuario</p>
            @endif
@endsection

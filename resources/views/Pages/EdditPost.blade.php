@extends('layouts.Principal')


@section('title','show_posts')

@section('principal_section')

<h2 class="m-auto text-center mb-5" >  Eddit Post</h2>


<div id="cont_formulario_post">
    <form action="{{route('eddit_post',['id'=>$post->id])}}" method="post">
        @csrf
        @method ('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo</label>
            <input value="{{$post->title}}" name ="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-floating">
            <textarea name ="content" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$post->content}}</textarea>
            <label for="floatingTextarea2"></label>
        </div>
        <div>
            @foreach($asignaturas as $asignatura)
            <label for="">{{$asignatura->name}}</label>   <input type="checkbox" name="asignatura[]" value="{{$asignatura->id}}">
            @endforeach
        </div>


        <button type="submit" class="mt-3 btn btn-primary">Submit</button>
    </form>
</div>




@endsection

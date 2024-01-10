@extends('layouts.Principal')

@section('principal_section')





<div class="card m-auto" style="width: 18rem;">

            @foreach($posts as $post)
                <div class="cont_post card-body">
                    <h6 class="card-subtitle mb-2 text-body-secondary">User id: {{$post->user_id}}</h6>
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    @foreach($post->asignaturas as $asignatura)
                    <p  class=" tags card-text">{{$asignatura->name}}</p>
                    @endforeach

                        <div id="cont_post_btns">

                            <form action="{{route('delete_post',['id'=>$post->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                            <form action="{{route('show_eddit_post',['id'=>$post->id])}}" method="GET">
                                @csrf
                                <button type="submit">Edit Post</button>
                            </form>
                    </div>      
                </div>               
            @endforeach

            <div class="m-auto mb-5 mt-5">
                <a href="{{route('show_create_post')}}"><button type="submit">Crteate Post</button>
</a>
            </div>
</div>




@endsection
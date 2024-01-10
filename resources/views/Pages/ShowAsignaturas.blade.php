@extends('layouts.Principal')

@section ('principal_section')

    <h1>Asignaturas</h1>

    @foreach($asignaturas as $asignatura)
        <div id="muestra_asig">
            <p>{{$asignatura->name}}</p>
            <form action="{{route('delete_asignatura',['id'=>$asignatura->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submite"> Delete</button>
            </form>
        </div>
    @endforeach

<hr>
    <h1>Create Asignaturas</h1>
    <div id="cont_form_asig">
        <form action="{{route('create_asignatura')}}" method="post">
            @csrf
            <label class="m-1"  for="">Nombre de la asignatura:</label>
            <input   class="m-1 "  type="text" name="name">
            <div>
                <button type="submit" class="m-1 btn btn-primary">Crear</button>
            </div>
        </form>
    </div>


@endsection
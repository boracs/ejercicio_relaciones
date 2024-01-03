@extends('layouts.Principal')

@section('title','AddUsers')


@section('principal_section')


<form id="form_add_user" method="POST" action="{{route('create_user')}}">
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Surbname</label>
            <input name="surbname"  type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input  name="password"  type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Create User</button>
</form>

<hr/>



<h1>Usuarios</h1>






<div class="container text-center">
@foreach($users as $user)
  <div class="row cont_usuario" >
        <div class="col ">
        	{{ $user->name }}
        </div>
        <div class="col ">
        	{{ $user->surbname }}
        </div>
        <div class="col ">
        	{{$user->email}}
        </div>
        <div class="col ">
			<a href="{{route('edit_user',['id'=>$user->id])}}">
        	<button ahre type="button" class="btn btn-warning">Edit</button>
			</a>
        </div>
        <div class="col campo">
			<a href="{{route('delete_user',['id'=>$user->id])}}">
        		<button type="button" class="btn btn-danger">Delete</button>
			</a>
        </div>
  </div>
@endforeach
</div>


<hr/>

@endsection







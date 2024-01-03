@extends('layouts.Principal')

@section('title','Edit_User')


@section('principal_section')


<h3 class="text-center">Edditiin user {{$user->id}}</h3>


<form id="form_add_user" method="POST" action="{{route('edit_user_2',['id'=>$user->id])}}">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input value="{{$user->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label  for="exampleInputEmail1" class="form-label">Surbname</label>
            <input  value="{{$user->surbname}}" name="surbname"  type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input value="{{$user->email}}" name="email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input value="{{$user->password}}"  name="password"  type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection







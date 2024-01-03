@extends('layouts.Principal')

@section('title','AddUsers')


@section('principal_section')


<h2>Add address</h2>
<h3 class="text-center">Create Address</h3>
<form id="form_add_user" method="POST" action="{{route('create_address')}}">
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Province</label>
            <input value="" name="province" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label  for="exampleInputEmail1" class="form-label">Municipality</label>
            <input  value="" name="municipality"  type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Street</label>
            <input value="" name="street"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Number</label>
            <input value="" name="number"  type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">flat</label>
            <input value="" name="flat"  type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">letter</label>
            <input value="" name="letter"  type="text" class="form-control" id="exampleInputPassword1">
        </div>
      
        <button type="submit" class="btn btn-primary">Create address</button>
</form>

@endsection
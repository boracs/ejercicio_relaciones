@extends('layouts.Principal')

@section('title','AddUsers')


@section('principal_section')


<h2 class="text-center">Eddit  address {{$address->id}}</h2>
<form id="form_add_user" method="POST" action="{{route('eddit_address',['id'=>$address->id])}}">
    @csrf
    @method ('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Province</label>
            <input value="{{$address->province}}" name="province" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label  for="exampleInputEmail1" class="form-label">Municipality</label>
            <input  value="{{$address->municipality}}" name="municipality"  type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Street</label>
            <input value="{{$address->street}}" name="street"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Number</label>
            <input value="{{$address->number}}"  name="number"  type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">flat</label>
            <input value="{{$address->flat}}" name="flat"  type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">letter</label>
            <input value="{{$address->letter}}" name="letter"  type="text" class="form-control" id="exampleInputPassword1">
        </div>
      
        <button type="submit" class="mt-5 btn btn-primary">Eddit address</button>
    
      
</form>

@endsection
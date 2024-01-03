@extends('layouts.Principal')


@section('principal_section')


    <h2 class="text-center">ALL ADDRESES</h2>


    <div id="cont_see_all_posts" class="mt-5">
       <a href="{{route('show_create_address')}}"><button type="submit" class="m-auto btn btn-success">Create Address</button></a> 
    </div>


    <div id="cont_address" class="m-auto mt-5">
    @foreach($addresses as $address)
            <div class="card" style="width: 18rem;">

                <div class="card-header">
                    <p><strong>User_id: </strong>{{$address->user_id}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><p><strong>Province: </strong>{{$address->province}}</p></li>
                    <li class="list-group-item"><p><strong>MUnicipality: </strong>{{$address->municipality}}</p></li>
                    <li class="list-group-item"> <p><strong>Street: </strong>{{$address->street}}</p></li>
                    <li class="list-group-item"><p><strong>Number: </strong>{{$address->number}}</p></li>
                    <li class="list-group-item"><p><strong>Flat: </strong>{{$address->flat}}</p></li>
                    <li class="list-group-item"><p><strong>Letter: </strong>{{$address->letter}}</p></li>
                </ul>
               
                <div id="btns_address_card" >
                   <a href="{{ route('show_eddit_address',['id'=>$address->id])}}"><button class="m-3 btn btn-success">Edit</button> </a> 
                  
                   <form action="{{ route('delete_address',['id'=>$address->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                        <button type="submit" class="m-3 btn btn-success">Delete</button>
                   </form>
                </div>
            </div>



    @endforeach  
    </div>


@endsection
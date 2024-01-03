@extends('layouts.Principal')


@section('principal_section')


    <h2 class="text-center">Address_user_relations</h2>


    <div id="cont_form_rel_add_us">
        <form action="{{route('relation_address_user')}}" method ="POST">
        @csrf
        <select name="sel_users" id="">
            <option value="Seleciona un usuario">Seleciona un usuario</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>

        <select name="sel_addresses" id="">
            <option value="Seleciona un usuario">Seleciona un usuario</option>
            @foreach($addresses as $address)
                <option value="{{$address->id}}">{{$address->street}}</option>
            @endforeach
        </select>
        <button type="submit"> Vincular</button>
        </form>
    </div>

<table id="table" class=" mt-5">

    <thead>
        <th>Name</th>
        <th>Province</th>
        <th>Municipality</th>
        <th>Street</th>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                @if(!empty($user->address)) 
                    <td>{{$user->address->province}}</td>
                    <td>{{$user->address->municipality}}</td>
                    <td>{{$user->address->street}}</td>
                @else
                <td></td>
                <td></td>
                <td></td>
                @endif
            </tr>

        @endforeach

    </tbody>


</table>

@endsection
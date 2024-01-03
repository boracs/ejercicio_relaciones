<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Address;

class AddressController extends Controller
{


 public function show_addreses(){
    $addresses = Address::all();
    return  view ('Pages.Show_address',['addresses'=>$addresses]);
}
    
    
  
public function show_create_address(){
    $users = User::all();
  return view('Pages.Add_address',['users'=>$users]);
}


public function create_address(Request $request){
   $address = new Address;
   $address->province = $request['province'];
   $address->municipality = $request['municipality'];
   $address->street = $request['street'];
   $address->number = $request['number'];
   $address->flat = $request['flat'];
   $address->letter = $request['letter'];
   $address->save();

   return redirect()->route('show_addreses');
}



public function show_eddit_address($id){
        $address =  Address::find($id);

        return view('Pages.Eddit_address',['address'=>$address]);

}


public function eddit_address(Request $request, $id){
    $address =  Address::find($id);
    $address->province = $request['province'];
    $address->municipality = $request['municipality'];
    $address->street = $request['street'];
    $address->number = $request['number'];
    $address->flat = $request['flat'];
    $address->letter = $request['letter'];
    $address->save();

    return redirect()->route('show_addreses');

}


public function delete_address($id){
    $address = Address::findOrFail($id);
    $address ->delete();
    return redirect()->route('show_addreses');
}




public function show_relation_address_user(){
    $addresses = Address::all();
    $users = User::all();
    return view('Pages.Address_user_relation',['addresses'=>$addresses,'users'=>$users]);
}


public function relation_address_user(Request $request){
    $user_id = $request['sel_users'];
    $address_id = $request['sel_addresses'];

    $address = Address::findOrFail($address_id);
    $user = User::findOrFail($user_id);

    if($address->user_id == null && $user->address==false){ //si el address no tiene ninguna user_id asignada y el usuario no tiene una direccion
        $address->user_id = $user->id;
        $address->save();
        return redirect()->route('show_relation_address_user');
    }else {
        if($user->address){
        $user->address->delete();  // eliminas la direccion que tiene el  usuario asignada. ( OJO  eliminas la direccion completna no la asignacion)
        }
        $address->user_id = $user->id;   //le asignas una direccion al usuario.
        $address->save(); //  guardas la direccion con el nuevo user_id
        
        return redirect()->route('show_relation_address_user');
    }


}




}


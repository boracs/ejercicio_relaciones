<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Address;

class UsserController extends Controller
{

    public function Add_users() {

        $users= User::All();
     return view('Pages.Add_users',['users'=>$users]);


    }

    public function Create_user(Request $request) {

        $name = $request['name'];
        $surbname = $request['surbname'];
        $email =$request['email'];
        $password = $request['password'];

        User::create([
            'name' => $name,
            'surbname' => $surbname,
            'email' => $email,
            'password' => $password
        ]);
        $users= User::All();
        return redirect()->route('add_users');
       }


public function edit_user($id){
    $user = User::findOrFail($id);
    return view('Pages.EditUser',['user'=>$user]);
}



public function edit_user_2(Request $request, $id){
    $user= User::findOrFail($id);
    $user->name = $request['name'];
    $user->surbname = $request['surbname'];
    $user->email = $request['email'];
    $user->password = $request['password'];
    $user->save();
    return redirect()->route('add_users');
}



public function delete_user($id){
    $user = User::findOrFail($id);
    $user->delete();
    

    return redirect()->route('add_users');

}


}
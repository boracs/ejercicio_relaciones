<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;

class AsignaturaController extends Controller
{
    //

    public function show_asignaturas(){
        $asignaturas = Asignatura::all();
        return view('Pages.ShowAsignaturas',['asignaturas'=>$asignaturas]);
    }

    public function create_asignatura(Request $request){
        $asignatura = new Asignatura;
        $asignatura->name = $request['name'];
        $asignatura->save();
        return redirect()->route ('show_asignaturas');
    }


    public function delete_asignatura($id){

        $asig = Asignatura::find($id);
        $asig->delete();
        return redirect()->route ('show_asignaturas');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;
use CarbonCarbon;

class PerosnasController extends Controller
{
    
    public function mostrar($id){

        $persona = Personas::find($id);

        return view('mostrar.mostrar', compact('persona'));        

    }

    public function crear(){

        return view('mostrar.crear');

    }

    public function store(Request $request){
         
        $persona = new Personas();

        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;
        $persona->nombre = $request->nombre;
        $persona->fecha_de_nacimiento = $request->fecha_de_nacimiento;
        $persona->sexo = $request->sexo;
        $persona->edad = $request->edad;
        
        $persona->save();

        return redirect()->route('index', $persona);
    }

    public function editar(Personas $persona){

        return view('mostrar.editar', compact('persona'));

    }

    public function actualizar(Request $request, Personas $persona){

        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;
        $persona->nombre = $request->nombre;
        $persona->fecha_de_nacimiento = $request->fecha_de_nacimiento;
        $persona->sexo = $request->sexo;
        $persona->edad = $request->edad;
        
        $persona->save();

        return redirect()->route('index');

    }

    public function eliminar(Personas $persona) {

        $persona->delete();

        return redirect()->route('index');
    }


}

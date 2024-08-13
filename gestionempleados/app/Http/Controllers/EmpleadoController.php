<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;



class EmpleadoController extends Controller


{
  

    public function index()
    {
        $empleados = Empleados::all();
        return view('indexemp', compact('empleados'));
    }

  

    public function create()
    {
        return view('createemp');
    }



    public function store(Request $request)
    {
     
        $request->validate([

            'id'=> 'required',
            'nombre'=>'required|max:255',
            'telefono'=>'required|max:255',
            'correo'=>'required|max:255',
        ]);

        Empleados::create($request->all());

        return redirect()->route('empleado.index')
        ->with('success','empleado creado satisfactoriamente');

     
    }



    public function show($id)
    {
        $empleado = Empleados::find($id);
        return view('empleado.show', compact('empleado'));
    }



    public function edit($id)
    {
        
        $empleado = Empleados::find($id);

        return view('editemp', compact('empleado'));

    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'id'=> 'required',
            'nombre'=>'required|max:255',
            'telefono'=>'required|max:255',
            'correo'=>'required|max:255',

        ]);

        $empleado = Empleados::find($id);

        $empleado->update($request->all());

        return redirect()->route('empleado.index')->with('success', 'empleado actualizado satisfactoriamente.');
    }
  


    public function destroy($id)
    {
        $empleado = Empleados::find($id);

        $empleado -> delete();

        return redirect()->route('empleado.index')->with('success','empleado eliminado satisfactoriamente');
    }
}

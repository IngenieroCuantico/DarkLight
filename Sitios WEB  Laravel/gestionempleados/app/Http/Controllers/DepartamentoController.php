<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamentos;

class DepartamentoController extends Controller

{
  
    //funcion index
    public function index()
    {
        $departamentos = Departamentos::all();
        return view('index', compact('departamentos'));
    }

  
    //funcion creacion
    public function create()
    {
        return view('createdpto');
    }


    //funcion para el guardado de lo que existe como informacion
    public function store(Request $request)
    {
     
        $request->validate([

            'id'=> 'required',
            'nombre'=>'required|max:255',
        ]);

        Departamentos::create($request->all());
        return redirect()->route('departamento.index')
        ->with('success','departamento creado satisfactoriamente');

     
    }



    public function show($id)
    {
        $departamento = Departamentos::find($id);
        return view('departamento.show', compact('departamento'));
    }



    public function edit($id)
    {
        
        $departamento = Departamentos::find($id);

        return view('editdpto', compact('departamento'));

    }


    public function update(Request $request, $id)
    {
        $request->validate([

          'id' => 'required',
          'nombre' => 'required|max:255',

        ]);

        $departamento = Departamentos::find($id);

        $departamento->update($request->all());

        return redirect()->route('departamento.index')->with('success', 'departamento actualizado satisfactoriamente.');
    }
  


    public function destroy($id)
    {
        $departamento = Departamentos::find($id);

        $departamento -> delete();

        return redirect()->route('departamento.index')->with('success','departamento eliminado satisfactoriamente');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\VehiculoFormRequest;
use Illuminate\Http\Request;
use App\Vehiculo;
use DB;

class vehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    if ($request)
    {
    $query=trim($request->get('searchText'));
    $vehiculos=DB::table('vehiculos')->where('placa','LIKE','%'.$query.'%')
    ->orderBy('id','desc')
    ->paginate(5);
    return view('Vehiculo.index',["vehiculos"=>$vehiculos,"searchText"=>$query]);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store (VehiculoFormRequest $request)
    {
    $vehiculo=new Vehiculo;
    $vehiculo->placa=$request->get('placa');
    $vehiculo->tipo=$request->get('tipo');
    $vehiculo->modelo=$request->get('modelo');
    $vehiculo->save();
    return Redirect::to('vehiculo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        return Redirect::to('vehiculo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculo.edit', compact('vehiculo')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['placa' => 'required', 'tipo' => 'required', 'modelo' => 'required']);
        vehiculo::find($id)->update($request->all());
        return redirect()->route('vehiculo.index')->with('success', 'Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehiculo::find($id)->delete();
        return redirect()->route('vehiculo.index')->with('success', 'Registro Eliminado');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\investigadores;
use App\Repositories\InvestigadoresRepository;

use App\facultades;
use App\Repositories\FacultadesRepository;
class InvestigadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $investigadores;
    protected $facultades;

    public function __construct(InvestigadoresRepository $investigadores, FacultadesRepository $facultades)
    {
        $this->investigadores = $investigadores;
        $this->facultades = $facultades;
    }

    public function index()
    {
        return view('investigadores.index', [
            'investigadores' => $this->investigadores->allInvestigadores(),
            'facultades' => $this->facultades->allFacultades(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:45',
            'fechanacimiento' => 'required',
            'codigo' => 'required|max:20',
            'facultad' => 'required',
            'direccion' => 'max:45',
            'telefono' => 'max:20',
        ]);
        $investigador = new Investigadores;
        $investigador->nombre=$request->name;
        $investigador->fechanacimiento=$request->fechanacimiento;
        $investigador->fk_idfacultades=$request->facultad;
        $investigador->codigo=$request->codigo;
        $investigador->direccion=$request->direccion;
        $investigador->telefono=$request->telefono;
        $investigador->save();
        return redirect('Investigadores/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('investigadores.edit', [
            'investigadores' => $this->investigadores->allInvestigadores(),
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $investigador = Investigadores::find($request->investigador);
        $investigador->delete();
        return redirect('Investigadores/index');
    }
    public function update(Request $request)
    {
        $investigador = Investigadores::find($request->investigador);
        $investigador->nombre=$request->name;
        $investigador->fechanacimiento=$request->fechanacimiento;
        $investigador->fk_idfacultades=$request->facultad;
        $investigador->codigo=$request->codigo;
        $investigador->direccion=$request->direccion;
        $investigador->telefono=$request->telefono;
        $investigador->save();
        return redirect('Investigadores/index');
    }
}

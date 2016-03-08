<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Areas;
use App\Repositories\AreasRepository;

use App\investigadores;
use App\Repositories\InvestigadoresRepository;

use App\Areas_x_investigadores;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $areas;
    protected $investigadores;

    public function __construct(InvestigadoresRepository $investigadores, AreasRepository $areas)
    {
        $this->investigadores = $investigadores;
        $this->areas = $areas;
    }
    public function index()
    {
        //
        return view('index', [
            'investigadores' => $this->investigadores->allInvestigadores(),
            'areas' => $this->areas->allAreas(),
        ]);
    }
    public function asignados()
    {
        //
        return view('plantillas.agregados', [
            'investigadores' => $this->investigadores->forArea(),
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
        if($request->ajax()){
            //return "AJAX";
            //die(print_r($_POST));
            print_r($_POST);
            $correcto=false;
            $asigna = new Areas_x_investigadores;
         //   for ($i=0; $i <count($_POST['area']) ; $i++) { 
            foreach ($request->area as $area) {
                $asigna->fk_idinvestigadores=$request->investigador;
                $asigna->fk_idareas=$area;
                if ($asigna->save())
                {
                    $correcto=true;
                }else{
                    $correcto=false;
                }
            }
            if($correcto==true)
                { return redirect('asignados');
                }else{
                    echo "No se pudo ingresar valores";
                }
        }

            /*$facultad = new Facultades;
            $facultad->nombre=$request->name;
            $facultad->save();
            return redirect('Facultades/index');*/
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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}

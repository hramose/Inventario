<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Asignar_e_v;
use Inventario\Evirtual;
use Inventario\Aplicaciones;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\AsignarevRequest;
use Illuminate\Routing\Route;

class AsignarevController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->asignarev = Asignar_e_v::find($route->getParameter('asignarev'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignarevs = Asignar_e_v::all();
        return view('asignarev.index', compact('asignarevs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evirtuals = Evirtual::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $aplicaciones = Aplicaciones::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('asignarev.create', compact('evirtuals', 'aplicaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsignarevRequest $request)
    {
        Asignar_e_v::create($request->all());
        return redirect('/asignarev/create')->with('message', 'Asignación Realizada Correctamente');
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
        $asignarev = Asignar_e_v::find($id);
        $evirtuals = Evirtual::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $aplicaciones = Aplicaciones::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('asignarev.edit', ['asignarev' => $this->asignarev], compact('evirtuals', 'aplicaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AsignarevRequest $request, $id)
    {
        $this->asignarev -> fill($request->all());
        $this->asignarev -> save();
        Session::flash('message', 'Asignación Editada Correctamente');
        return Redirect::to('/asignarev');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->asignarev -> delete();
        Session::flash('message', 'Asignación Eliminada Correctamente');
        return Redirect::to('/asignarev');
    }
}

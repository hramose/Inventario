<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Defisico;
use Inventario\Efisico;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\DefisicoRequest;
use Inventario\Http\Requests\DefisicoUpdateRequest;
use Illuminate\Routing\Route;

class DefisicoController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->defisico = Defisico::find($route->getParameter('defisico'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $defisicos = Defisico::all();
        return view('defisico.index', compact('defisicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $efisicos = Efisico::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('defisico.create', compact('efisicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DefisicoRequest $request)
    {
        Defisico::create($request->all());
        return redirect('/refisico/create')->with('message', 'Descripción Creada Correctamente');
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
        $efisicos = Efisico::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('defisico.edit', ['defisico' => $this->defisico], compact('efisicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DefisicoRequest $request, $id)
    {
        $this->defisico -> fill($request->all());
        $this->defisico -> save();
        Session::flash('message', 'Descripción Editada Correctamente');
        return Redirect::to('/defisico');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->defisico -> delete();
        Session::flash('message', 'Descripción Eliminada Correctamente');
        return Redirect::to('/defisico');
    }
}

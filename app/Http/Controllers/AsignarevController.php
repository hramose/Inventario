<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Asignarev;
use Inventario\Evirtual;
use Inventario\Aplicacion;
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
        $this->asignarev = Asignarev::find($route->getParameter('asignarev'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignarevs = Asignarev::all();
        return view('asignarev.index', compact('asignarevs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evirtuals = Evirtual::orderBy('nomevirtual', 'ASC')->lists('nomevirtual', 'id');
        $aplicacions = Aplicacion::orderBy('nomapp', 'ASC')->lists('nomapp', 'id');
        return view('asignarev.create', compact('evirtuals', 'aplicacions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsignarevRequest $request)
    {
        Asignarev::create($request->all());
        return redirect('/asignarev')->with('message', 'Asignación Realizada Correctamente');
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
        $evirtuals = Evirtual::orderBy('nomevirtual', 'ASC')->lists('nomevirtual', 'id');
        $aplicacions = Aplicacion::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('asignarev.edit', ['asignarev' => $this->asignarev], compact('evirtuals', 'aplicacions'));
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

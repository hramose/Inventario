<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Asignaref;
use Inventario\Efisico;
use Inventario\Aplicacion;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\AsignarefRequest;
use Illuminate\Routing\Route;

class AsignarefController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->asignaref = Asignaref::find($route->getParameter('asignaref'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignarefs = Asignaref::all();
        return view('asignaref.index', compact('asignarefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $efisicos = Efisico::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $aplicacions = Aplicacion::orderBy('nomapp', 'ASC')->lists('nomapp', 'id');
        return view('asignaref.create', compact('efisicos', 'aplicacions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsignarefRequest $request)
    {
        Asignaref::create($request->all());
        return redirect('/asignaref')->with('message', 'Asignación Realizada Correctamente');
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
        $aplicacions = Aplicaciones::orderBy('nomapp', 'ASC')->lists('nomapp', 'id');
        return view('asignaref.edit', ['asignaref' => $this->asignaref], compact('efisicos', 'aplicacions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AsignarefRequest $request, $id)
    {
        $this->asignaref -> fill($request->all());
        $this->asignaref -> save();
        Session::flash('message', 'Asignación Editada Correctamente');
        return Redirect::to('/asignaref');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->asignaref ->delete();
        Session::flash('message', 'Asignación Eliminada Correctamente');
        return Redirect::to('/asignaref');
    }
}
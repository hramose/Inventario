<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Daplicacion;
use Inventario\Aplicacion;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\DaplicacionRequest;
use Illuminate\Routing\Route;
use DB;

class DaplicacionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->daplicacion = Daplicacion::find($route->getParameter('daplicacion'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daplicacions = Daplicacion::all();
        return view('daplicacion.index', compact('daplicacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aplicacions = Aplicacion::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('daplicacion.create', compact('aplicacions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DaplicacionRequest $request)
    {
        Daplicacion::create($request->all());
        return redirect('/daplicacion')->with('message', 'Descripción Creada Correctamente');
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
        $daplicacions = Aplicacion::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('daplicacion.edit', ['daplicacion' => $this->daplicacion], compact('daplicacions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DaplicacionRequest $request, $id)
    {
        $this->daplicacion -> fill($request->all());
        $this->daplicacion -> save();
        Session::flash('message', 'Descripción Editada Correctamente');
        return Redirect::to('/daplicacion');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->daplicacion -> delete();
        Session::flash('message', 'Descripción Eliminada Correctamente');
        return Redirect::to('/daplicacion');
    }
}
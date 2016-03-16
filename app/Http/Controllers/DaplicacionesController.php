<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Daplicaciones;
use Inventario\Aplicaciones;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\DappRequest;
use Illuminate\Routing\Route;
use DB;

class DaplicacionesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->daplicacion = Daplicaciones::find($route->getParameter('daplicacion'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daplicaciones = Daplicaciones::all();
        //dd($daplicaciones);
        return view('daplicacion.index', compact('daplicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aplicaciones = Aplicaciones::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('daplicacion.create', compact('aplicaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DappRequest $request)
    {
        Daplicaciones::create($request->all());
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
        $aplicaciones = Aplicaciones::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('daplicacion.edit', ['daplicacion' => $this->daplicacion], compact('aplicaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DappRequest $request, $id)
    {
        $this->daplicacion -> fill($request->all());
        $this->daplicacion -> save();
        Session::flash('message', 'Descripción Editada Correctamente');
        return Redirect::to('/daplicacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->daplicacion -> delete();
        Session::flash('message', 'Desripción Eliminada Correctamente');
        return Redirect::to('/daplicacion');
    }
}

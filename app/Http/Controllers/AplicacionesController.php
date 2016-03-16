<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Aplicaciones;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\AppRequest;
use Inventario\Http\Requests\AppUpdateRequest;
use Illuminate\Routing\Route;

class AplicacionesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->aplicacion = Aplicaciones::find($route->getParameter('aplicacion'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aplicaciones = Aplicaciones::all();
        return view('aplicacion.index', compact('aplicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aplicacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppRequest $request)
    {
        Aplicaciones::create($request->all());
        return redirect('/daplicacion/create')->with('message', 'Aplicación Creada Correctamente');
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
        return view('aplicacion.edit', ['aplicacion' => $this->aplicacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AppUpdateRequest $request, $id)
    {
        $this->aplicacion -> fill($request->all());
        $this->aplicacion -> save();
        Session::flash('message', 'Aplicación Editada Correctamente');
        return Redirect::to('/aplicacion');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->aplicacion -> delete();
        Session::flash('message', 'Aplicación Eliminada Correctamente');
        return Redirect::to('/aplicacion');
    }
}

<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Oefisico;
use Inventario\Efisico;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\OefisicoRequest;
use Illuminate\Routing\Route;

class OefisicoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->oefisico = Oefisico::find($route->getParameter('oefisico'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oefisicos = Oefisico::all();
        return view('oefisico.index', compact('oefisicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $efisicos = Efisico::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('oefisico.create', compact('efisicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OefisicoRequest $request)
    {
        Oefisico::create($request->all());
        return redirect('/befisico/create')->with('message', 'Observación Creada Correctamente');
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
        return view('oefisico.edit', ['oefisico' => $this->oefisico], compact('efisicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OefisicoRequest $request, $id)
    {
        $this->oefisico -> fill($request->all());
        $this->oefisico -> save();
        Session::flash('message', 'Observación Editada Correctamente');
        return Redirect::to('/oefisico');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->oefisico -> delete();
        Session::flash('message', 'Observación Eliminada Correctamente');
        return Redirect::to('/oefisico');
    }
}

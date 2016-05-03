<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Befisico;
use Inventario\Efisico;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\BefisicoRequest;
use Illuminate\Routing\Route;

class BefisicoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->befisico = Befisico::find($route->getParameter('befisico'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $befisicos = Befisico::all();
        return view('befisico.index', compact('befisicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $efisicos = Efisico::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('befisico.create', compact('efisicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BefisicoRequest $request)
    {
        Befisico::create($request->all());
        return redirect('/befisico')->with('message', 'BackUp Creado Correctamente');
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
        return view('befisico.edit', ['befisico' => $this->befisico], compact('efisicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BefisicoRequest $request, $id)
    {
        $this->befisico -> fill($request->all());
        $this->befisico -> save();
        Session::flash('message', 'Obrservación Editada Correctamente');
        return Redirect::to('/befisico');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->befisico -> delete();
        Session::flash('message', 'Observación Eliminada Correctamente');
        return Redirect::to('/befisico');
    }
}

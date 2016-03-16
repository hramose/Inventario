<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Refisico;
use Inventario\Tred;
use Inventario\Efisico;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\RefisicoRequest;
use Inventario\Http\Requests\RefUpdateRequest;
use Illuminate\Routing\Route;

class RefisicoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->refisico = Refisico::find($route->getParameter('refisico'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refisicos = Refisico::all();
        return view('refisico.index', compact('refisicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $efisicos = Efisico::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $treds = Tred::orderBy('tipo_red', 'ASC')->lists('tipo_red', 'id');
        return view('refisico.create', compact('efisicos', 'treds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RefisicoRequest $request)
    {
        Refisico::create($request->all());
        return redirect('/refisico/create')->with('message', 'Red Creada Correctamente');
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
        $treds = Tred::orderBy('tipo_red', 'ASC')->lists('tipo_red', 'id');
        return view('refisico.edit', ['refisico' => $this->refisico], compact('efisicos', 'treds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RefUpdateRequest $request, $id)
    {
        $this->refisico -> fill($request->all());
        $this->refisico -> save();
        Session::flash('message', 'Red Editada Correctamente');
        return Redirect::to('/refisico');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->refisico -> delete();
        Session::flash('message', 'Red Eliminada Correctamente');
        return Redirect::to('/refisico');
    }
}

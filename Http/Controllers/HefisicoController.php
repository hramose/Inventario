<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Hmantenimiento;
use Inventario\User;
use Inventario\Efisico;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\HefisicoRequest;
use Illuminate\Routing\Route;

class HefisicoController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->hefisico = Hmantenimiento::find($route->getParameter('hefisico'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hefisicos = Hmantenimiento::all();
        return view('hefisico.index', compact('hefisicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('name', 'ASC')->lists('name', 'id');
        $efisicos = Efisico::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('hefisico.create', compact('efisicos', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HefisicoRequest $request)
    {
        Hmantenimiento::create($request->all());
        return redirect('/hefisico')->with('message', 'Historial Creado Correctamente');
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
        $users = User::orderBy('name', 'ASC')->lists('name', 'id');
        $efisicos = Efisico::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('hefisico.edit', ['hefisico' => $this->hefisico], compact('efisicos', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HefisicoRequest $request, $id)
    {
        $this->hefisico -> fill($request->all());
        $this->hefisico -> save();
        Session::flash('message', 'Historial Editado Correctamente');
        return Redirect::to('/hefisico');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->hefisico -> delete();
        Session::flash('message', 'Historial Eliminado Correctamente');
        return Redirect::to('/hefisico');
    }
}

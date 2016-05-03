<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Fabricante;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\FefisicoRequest;
use Inventario\Http\Requests\FefisicoUpdateRequest;
use Illuminate\Routing\Route;

class FabricanteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->fefisico = Fabricante::find($route->getParameter('fefisico'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fefisicos = Fabricante::all();
        return view('fefisico.index', compact('fefisicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fefisico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FefisicoRequest $request)
    {
        Fabricante::create($request->all());
        return redirect('/tefisico/create')->with('message', 'Fabricante Creada Correctamente');
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
        return view('fefisico.edit', ['fefisico' => $this->fefisico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FefisicoUpdateRequest $request, $id)
    {
        $this->fefisico -> fill($request->all());
        $this->fefisico -> save();
        Session::flash('message', 'Fabricante Editado Correctamente');
        return Redirect::to('/fefisico');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->fefisico -> delete();
        Session::flash('message', 'Fabricante Eliminado Correctamente');
        return Redirect::to('/fefisico');
    }
}

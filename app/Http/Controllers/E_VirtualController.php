<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Evirtual;
use Inventario\Efisico;
use Inventario\Tevirtual;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\EvirtualRequest;
use Inventario\Http\Requests\EvirtualUpdateRequest;
use Illuminate\Routing\Route;

class E_VirtualController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->evirtual = Evirtual::find($route->getParameter('evirtual'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evirtuals = Evirtual::all();
        return view('evirtual.index', compact('evirtuals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $efisicos = Efisico::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $tipos = Tevirtual::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('evirtual.create', compact('efisicos', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EvirtualRequest $request)
    {
        Evirtual::create($request->all());
        return redirect('/devirtual/create')->with('message', 'Elemento Creado Correctamente');
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
        $tipos = Tevirtual::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('evirtual.edit', ['evirtual' => $this->evirtual], compact('efisicos', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EvirtualUpdateRequest $request, $id)
    {
        $this->evirtual -> fill($request->all());
        $this->evirtual -> save();
        Session::flash('message', 'Elimento Editado Correctamente');
        return Redirect::to('/evirtual');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->evirtual -> delete();
        Session::flash('message', 'Elemento Eliminado Correctamente');
        return Redirect::to('/evirtual');
    }
}

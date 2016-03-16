<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Devirtual;
use Inventario\Evirtual;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\DevirtualRequest;
use Illuminate\Routing\Route;

class DevirtualController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->devirtual = Devirtual::find($route->getParameter('devirtual'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devirtuals = Devirtual::all();
        return view('devirtual.index', compact('devirtuals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evirtuals = Evirtual::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('devirtual.create', compact('evirtuals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DevirtualRequest $request)
    {
        Devirtual::create($request->all());
        return redirect('/oevirtual/create')->with('message', 'Descripción Creada Correctamente');
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
        $evirtuals = Evirtual::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('devirtual.edit', ['devirtual' => $this->devirtual], compact('evirtuals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DevirtualRequest $request, $id)
    {
        $this->devirtual -> fill($request->all());
        $this->devirtual -> save();
        Session::flash('message', 'Descripción Editada Correctamente');
        return Redirect::to('/devirtual');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->devirtual -> delete();
        Session::flash('message', 'Descripción Eliminada Correctamente');
        return Redirect::to('/devirtual');
    }
}

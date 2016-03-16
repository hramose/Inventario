<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Observaciones;
use Inventario\Evirtual;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\OevirtualRequest;
use Illuminate\Routing\Route;

class OevirtualController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->oevirtual = Observaciones::find($route->getParameter('oevirtual'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oevirtuals = Observaciones::all();
        return view('oevirtual.index', compact('oevirtuals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evirtuals = Evirtual::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('oevirtual.create', compact('evirtuals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OevirtualRequest $request)
    {
        Observaciones::create($request->all());
        return redirect('/bevirtual/create')->with('message', 'Observación Creada Correctamente');
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
        return view('oevirtual.edit', ['oevirtual' => $this->oevirtual], compact('evirtuals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OevirtualRequest $request, $id)
    {
        $this->oevirtual -> fill($request->all());
        $this->oevirtual -> save();
        Session::flash('message', 'Observación Editada Correctamente');
        return Redirect::to('/oevirtual');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->oevirtual -> delete();
        Session::flash('message', 'Observación Eliminada Correctamente');
        return Redirect::to('/oevirtual');
    }
}

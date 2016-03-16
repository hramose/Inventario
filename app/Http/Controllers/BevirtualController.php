<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Backup;
use Inventario\Evirtual;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\BevirtualRequest;
use Illuminate\Routing\Route;

class BevirtualController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->bevirtual = Backup::find($route->getParameter('bevirtual'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bevirtuals = Backup::all();
        return view('bevirtual.index', compact('bevirtuals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evirtuals = Evirtual::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('bevirtual.create', compact('evirtuals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BevirtualRequest $request)
    {
        Backup::create($request->all());
        return redirect('/revirtual/create')->with('message', 'BackUp Creado Correctamente');
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
        return view('bevirtual.edit', ['bevirtual' => $this->bevirtual], compact('evirtuals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BevirtualRequest $request, $id)
    {
        $this->bevirtual -> fill($request->all());
        $this->bevirtual -> save();
        Session::flash('message', 'Obrservación Editada Correctamente');
        return Redirect::to('/bevirtual');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->bevirtual -> delete();
        Session::flash('message', 'Observación Eliminada Correctamente');
        return Redirect::to('/bevirtual');
    }
}

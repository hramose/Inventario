<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Revirtual;
use Inventario\Tred;
use Inventario\Evirtual;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\RevirtualRequest;
use Inventario\Http\Requests\RevUpdateRequest;
use Illuminate\Routing\Route;

class RevirtualController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->revirtual = Revirtual::find($route->getParameter('revirtual'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revirtuals = Revirtual::all();
        return view('revirtual.index', compact('revirtuals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evirtuals = Evirtual::orderBy('nomevirtual', 'ASC')->lists('nomevirtual', 'id');
        $treds = Tred::orderBy('tipo_red', 'ASC')->lists('tipo_red', 'id');
        return view('revirtual.create', compact('evirtuals', 'treds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RevirtualRequest $request)
    {
        Revirtual::create($request->all());
        return redirect('/revirtual/create')->with('message', 'Red Creada Correctamente');
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
        $evirtuals = Evirtual::orderBy('nomevirtual', 'ASC')->lists('nomevirtual', 'id');
        $treds = Tred::orderBy('tipo_red', 'ASC')->lists('tipo_red', 'id');
        return view('revirtual.edit', ['revirtual' => $this->revirtual], compact('evirtuals', 'treds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RevirtualRequest $request, $id)
    {
        $this->revirtual -> fill($request->all());
        $this->revirtual -> save();
        Session::flash('message', 'Red Editada Correctamente');
        return Redirect::to('/revirtual');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->revirtual -> delete();
        Session::flash('message', 'Red Eliminada Correctamente');
        return Redirect::to('/revirtual');
    }
}

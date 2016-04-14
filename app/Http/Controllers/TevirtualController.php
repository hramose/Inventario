<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Tevirtual;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\TevirtualRequest;
use Inventario\Http\Requests\TevirtualUpdateRequest;
use Illuminate\Routing\Route;

class TevirtualController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->tevirtual = Tevirtual::find($route->getParameter('tevirtual'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tevirtuals = Tevirtual::all();
        return view('tevirtual.index', compact('tevirtuals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tevirtual.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TevirtualRequest $request)
    {
        Tevirtual::create($request->all());
        return redirect('/evirtual/create')->with('message', 'Tipo Creado Correctamente');
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
        return view('tevirtual.edit', ['tevirtual' => $this->tevirtual]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TevirtualUpdateRequest $request, $id)
    {
        $this->tevirtual -> fill($request->all());
        $this->tevirtual -> save();
        Session::flash('message', 'Tipo Editado Correctamente');
        return Redirect::to('/tevirtual');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->tevirtual -> delete();
        Session::flash('message', 'Tipo Eliminado Correctamente');
        return Redirect::to('/tevirtual');
    }
}

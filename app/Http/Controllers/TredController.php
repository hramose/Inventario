<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Tred;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\TredRequest;
use Inventario\Http\Requests\TredUpdateRequest;
use Illuminate\Routing\Route;

class TredController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->tred = Tred::find($route->getParameter('tred'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treds = Tred::all();
        return view('tred.index', compact('treds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tred.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TredRequest $request)
    {
        Tred::create($request->all());
        return redirect('/tred')->with('message', 'Tipo de Red Creado Correctamente');
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
        return view('tred.edit', ['tred' => $this->tred]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TredUpdateRequest $request, $id)
    {
        $this->tred -> fill($request->all());
        $this->tred -> save();
        Session::flash('message', 'Tipo de Red Editado Correctamente');
        return Redirect::to('/tred');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->tred -> delete();
        Session::flash('message', 'Tipo de Red Eliminado Correctamente');
        return Redirect::to('/tred');
    }
}

<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Tefisico;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\TefisicoRequest;
use Inventario\Http\Requests\TefisicoUpdateRequest;
use Illuminate\Routing\Route;

class TefisicoController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->tefisico = Tefisico::find($route->getParameter('tefisico'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tefisicos = Tefisico::all();
        return view('tefisico.index', compact('tefisicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tefisico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TefisicoRequest $request)
    {
        Tefisico::create($request->all());
        return redirect('/efisico/create')->with('message', 'Tipo Creado Correctamente');
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
        return view('tefisico.edit', ['tefisico' => $this->tefisico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TefisicoUpdateRequest $request, $id)
    {
        $this->tefisico -> fill($request->all());
        $this->tefisico -> save();
        Session::flash('message', 'Tipo Editado Correctamente');
        return Redirect::to('/tefisico');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->tefisico -> delete();
        Session::flash('message', 'Tipo Eliminado Correctamente');
        return Redirect::to('/tefisico');
    }
}

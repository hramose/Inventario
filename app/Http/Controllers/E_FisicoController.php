<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\Efisico;
use Inventario\User;
use Inventario\Tefisico;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\EfisicoRequest;
use Inventario\Http\Requests\EfisicoUpdateRequest;
use Illuminate\Routing\Route;

class E_FisicoController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->efisico = Efisico::find($route->getParameter('efisico'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $efisicos = Efisico::all();
        return view('efisico.index', compact('efisicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('name', 'ASC')->lists('name', 'id');
        $tipos = Tefisico::orderBy('tipo', 'ASC')->lists('tipo', 'id');
        return view('efisico.create', compact('users', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EfisicoRequest $request)
    {
        Efisico::create($request->all());
        return redirect('/defisico/create')->with('message', 'Elemento Físico Creado Correctamente');
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
        $tipos = Tefisico::orderBy('tipo', 'ASC')->lists('tipo', 'id');
        return view('efisico.edit', ['efisico' => $this->efisico], compact('users', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EfisicoUpdateRequest $request, $id)
    {
        $this->efisico -> fill($request->all());
        $this->efisico -> save();
        Session::flash('message', 'Elemento Físico Editado Correctamente');
        return Redirect::to('/efisico');
    }

    /**
     * Remove the specified resoaurce from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->efisico -> delete();
        Session::flash('message', 'Elemento Físico Eliminado Correctamente');
        return Redirect::to('/efisico');
    }
}

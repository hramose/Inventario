<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use Inventario\App;
use Session;
use Redirect;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;
use Inventario\Http\Requests\AppRequest;
use Inventario\Http\Requests\AppUpdateRequest;
use Illuminate\Routing\Route;

class AppController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->app = App::find($route->getParameter('app'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps = App::all();
        return view('app.index', compact('apps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppRequest $request)
    {
        App::create($request->all());
        return redirect('/app')->with('message', 'Aplicación Agrega Correctamente');
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
        return view('app.edit', ['app' => $this->app]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AppUpdateRequest $request, $id)
    {
        $this->app -> fill($request->all());
        $this->app -> save();
        Session::flash('message', 'Aplicación Editada Correctamente');
        return Redirect::to('/app');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->app -> delete();
        Session::flash('message', 'Aplicación Eliminada Correctamente');
        return Redirect::to('/app');
    }
}

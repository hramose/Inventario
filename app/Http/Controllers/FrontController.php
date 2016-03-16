<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;

use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;

class FrontController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['only' => ['admin', 'index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    public function elementovir(){
        return view('elementovir');
    }

    public function agrelementovir(){
        return view('agrelementovir');
    }

    public function elielementovir(){
        return view('elielementovir');
    }

    public function admin(){
            return view('admin.index');
    }
}

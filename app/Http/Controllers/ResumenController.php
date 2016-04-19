<?php

namespace Inventario\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Inventario\Evirtual;
use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;

class ResumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eresumenf()
    {
        $efisicos = DB::table('tefisicos')
            ->join('efisicos', 'tefisicos.id', '=', 'efisicos.tefisico_id')
            ->join('defisicos', 'efisicos.id', '=', 'defisicos.efisico_id')
            ->select('tefisicos.*', 'efisicos.*', 'defisicos.*')
            ->get();

        //dd($efisicos);

        return view('resumen.eresumenf', compact('efisicos'));
    }

    public function eresumenv()
    {
        $evirtuals = DB::table('tevirtuals')
            ->join('evirtuals', 'tevirtuals.id', '=', 'evirtuals.tevirtual_id')
            ->join('devirtuals', 'evirtuals.id', '=', 'devirtuals.evirtual_id')
            ->join('asignarevs', 'evirtuals.id', '=', 'asignarevs.evirtual_id')
            ->select('tevirtuals.*', 'evirtuals.*', 'devirtuals.*', 'asignarevs.*')
            ->get();

        /*$aplicacions = DB::table('aplicacions', 'evirtuals')
            //->join('evirtuals', 'efisicos', '=', 'evirtuals.efisico_id')
            ->join('asignarevs', 'aplicacions.id', '=', 'asignarevs.aplicacion_id')
            ->select('aplicacions.*', 'asignarevs.*')
            ->get();*/

        /*$evirtual= Evirtual::find(5);

        foreach ($evirtual->aplicacions as $aplicacions) {
            echo $aplicacions->nomapp;
            echo $aplicacions->pivot->evirtual_id;
        }   */            

        //dd($evirtuals);

        return view('resumen.eresumenv', compact('evirtuals'));
    }
}

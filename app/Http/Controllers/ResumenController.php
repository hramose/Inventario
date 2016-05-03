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
            ->leftJoin('oefisicos', 'efisicos.id', '=', 'oefisicos.efisico_id')
            ->leftJoin('befisicos', 'efisicos.id', '=', 'befisicos.efisico_id')
            ->leftJoin('asignarefs AS aef', 'efisicos.id', '=', 'aef.efisico_id')
            ->select('tefisicos.*', 'efisicos.*', 'defisicos.*', 'oefisicos.*', 'befisicos.*', 'aef.*')
            ->get();

        //dd($efisicos);

        return view('resumen.eresumenf', compact('efisicos'));
    }

    public function eresumenv()
    {
        $evirtuals = DB::table('tevirtuals')
            ->join('evirtuals', 'tevirtuals.id', '=', 'evirtuals.tevirtual_id')
            ->join('devirtuals', 'evirtuals.id', '=', 'devirtuals.evirtual_id')
            ->leftJoin('oevirtuals', 'evirtuals.id', '=', 'oevirtuals.evirtual_id')
            ->leftJoin('bevirtuals', 'evirtuals.id', '=', 'bevirtuals.evirtual_id')
            ->leftJoin('asignarevs AS aev', 'evirtuals.id', '=', 'aev.evirtual_id')
            ->select('tevirtuals.*', 'evirtuals.*', 'devirtuals.*', 'oevirtuals.*', 'bevirtuals.*', 'aev.*')
            ->get();

        /*$aplicacions = DB::table('aplicacions')
            ->join('asignarevs AS app', 'aplicacions.id', '=', 'app.aplicacion_id')
            ->select('aplicacions.*', 'app.*')
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

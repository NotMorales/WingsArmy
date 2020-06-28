<?php

namespace App\Http\Controllers;

use App\asignacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reporteController extends Controller
{
    public function index()
    {
        $meseros = reporteController::reporte( date('Y-m-d') );
        return view('reportes.index', [
            'meseros' => $meseros,
            'date' => date('Y-m-d')
        ]);
    }

    public static function reporte($date)
    {
        $meseros = asignacion::
            select(asignacion::raw('count(*) as total, meseroId'))
            ->where('fecha', $date)
            ->groupBy('meseroId')
            ->get();
        return $meseros;
    }

    public function fecha(Request $request)
    {
        $request->validate([
            'date' => 'required|date'
        ]);
        $meseros = reporteController::reporte( Request('date') );
        return view('reportes.index', [
            'meseros' => $meseros,
            'date' => Request('date')
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

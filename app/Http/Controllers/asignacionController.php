<?php

namespace App\Http\Controllers;

use App\asignacion;
use App\cola;
use App\mesa;
use App\mesero;
use Illuminate\Http\Request;

class asignacionController extends Controller
{
    public function index()
    {
        asignacionController::asignado();
        return view('asignacion.index', [
            'mesas' => mesa::get(),
            'meseros' => cola::orderBy('created_at', 'ASC')->get()
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

    }
    public static function asignado()
    {
        $mesasTem = mesa::get();
        foreach($mesasTem as $mesaTem){
            $asignada = asignacion::where([
                'fecha' => date('Y-m-d'),
                'mesaId' => $mesaTem->mesaId,
                'final' => null
            ])->first();
            if($asignada == null){
                mesa::where('mesaId', $mesaTem->mesaId)
                    ->update(['estado' => 0
                ]);
            }
        }
    }
    public function asignar($mesa)
    {
        $mesaTem = mesa::where('mesaId', $mesa)->first();
        $meseroTem = cola::orderBy('created_at', 'ASC')->first();
        asignacion::create([
            'mesaId' => $mesaTem->mesaId,
            'meseroId' => $meseroTem->meseroId,
            'fecha' => date('Y-m-d'),
        ]);
        mesaController::cambiarEstado($mesaTem);
        colaController::moverCola($meseroTem);

        $nombre = $meseroTem->mesero->nombre;
        return redirect()->route('asignacion.index')
            ->with('success', "Mesa: $mesaTem->nombre asignada correctamente con el mesero: $nombre" );
    }

    public function terminar($mesa)
    {
        $asignacion = asignacion::where([
            'mesaId' => $mesa,
            'final' => null,
            'total' => null
        ])->first();
        asignacion::where('asignacionId', $asignacion->asignacionId)
            ->update(['final' => date('H:i:s')
        ]);
        mesaController::cambiarEstado( mesa::where('mesaId', $mesa)->first() );
        return redirect()->route('asignacion.index')
            ->with('success', "Mesa liberada Correctamente!" );
    }
}

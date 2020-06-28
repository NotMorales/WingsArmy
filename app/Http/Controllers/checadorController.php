<?php

namespace App\Http\Controllers;

use App\checador;
use App\mesa;
use App\mesero;
use Illuminate\Http\Request;

class checadorController extends Controller
{
    public function index()
    {
        $checadors = checador::where('fecha', date('Y-m-d') )->get();
        return view('checador.index', [
            'checadors' => $checadors
        ]);
    }

    public function create()
    {
        return view('checador.create', [
            'meseros' => mesero::where('deleted_at', 0)->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'meseroId' => 'required'
        ]);

        $meseroTem = checador::where('meseroId', Request('meseroId'))->where('fecha', date('Y-m-d'))->first();

        if( $meseroTem == null){
            checador::create([
                'meseroId' => Request('meseroId'),
                'fecha' => date('Y-m-d'),
                'entrada' => date('H:i:s')
            ]);
            colaController::store( Request('meseroId') );
            return redirect()->route('checador.index')
                ->with('success', "Check creado correctamente.");
        }

        return redirect()->route('checador.index')
            ->with('danger', "Este mesero ya realizo check hoy.");
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

    public function exit($checador)
    {
        $checadorTem = checador::where('checadorId', $checador)->first();

        if( $checadorTem->salida == null ){
            checador::where('checadorId', $checador)
                ->update(['salida' => date('H:i:s') ]
            );
            colaController::destroy( $checadorTem->meseroId );
            return redirect()->route('checador.index')
                ->with('success', "Salida registrada correctamente.");
        }else{
            colaController::destroy( $checadorTem->meseroId );
            return redirect()->route('checador.index')
                ->with('danger', "Este mesero ya realizo salida hoy.");
        }
    }
    public function all()
    {
        $checadors = checador::get();
        return view('checador.all', [
            'checadors' => $checadors
        ]);
    }
}

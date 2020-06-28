<?php

namespace App\Http\Controllers;

use App\cola;
use App\Http\Requests\MeseroRequests;
use App\mesero;
use Throwable;

class meseroController extends Controller
{
    public function index()
    {
        $meseros = mesero::get();
        return view('mesero.index', [
            'meseros' => $meseros
        ]);
    }

    public function create()
    {
        return view('mesero.create', [
            'mesero' => new mesero
        ]);
    }

    public function store(MeseroRequests $request)
    {
        mesero::create( $request->validated() );

        return redirect()->route('mesero.index')
            ->with('success', "Mesero creado correctamente.");
    }

    public function show($id)
    {
        //
    }

    public function edit(mesero $mesero)
    {
        return view('mesero.edit', [
            'mesero' => $mesero
        ]);
    }

    public function update(mesero $mesero, MeseroRequests $request)
    {
        $mesero->update( $request->validated() );

        return redirect()->route('mesero.index')
            ->with('primary', "Mesero editado correctamente.");
    }

    public function destroy(mesero $mesero)
    {
        try {
            $mesero->delete();
            return redirect()->route('mesero.index')
                ->with('danger', "Mesero eliminado correctamente.");
        } catch (Throwable $e) {
            return redirect()->route('mesero.index')
            ->with('danger', "No fue posible completar esta operacion, ya que este registro forma parte de otros mas.");
        }

    }
    public function delete(mesero $mesero)
    {
        $deleted = 1;
        $session = 'danger';
        $message = "Mesero eliminado correctamente.";
        if ( $mesero->deleted_at == 1 ) {
            $deleted = 0;
            $session = 'success';
            $message = "Mesero activado correctamente.";
        }

        mesero::where('meseroId', $mesero->meseroId)
                ->update(['deleted_at' => $deleted ]
        );
        colaController::destroy($mesero->meseroId);
        return redirect()->route('mesero.index')
            ->with( $session, $message );
    }
}

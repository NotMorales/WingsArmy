<?php

namespace App\Http\Controllers;

use App\Http\Requests\MesaRequests;
use App\mesa;
use Illuminate\Http\Request;

class mesaController extends Controller
{
    public function index()
    {
        $mesas = mesa::get();
        return view('mesa.index', [
            'mesas' => $mesas
        ]);
    }

    public function create()
    {
        return view('mesa.create', [
            'mesa' => new mesa
        ]);
    }

    public function store(MesaRequests $request)
    {
        mesa::create( $request->validated() );

        return redirect()->route('mesa.index')
            ->with('success', "Mesa creada correctamente.");
    }

    public function show($id)
    {
        //
    }

    public function edit(mesa $mesa)
    {
        return view('mesa.edit', [
            'mesa' => $mesa
        ]);
    }

    public function update(mesa $mesa, MesaRequests $request)
    {
        $mesa->update( $request->validated() );

        return redirect()->route('mesa.index')
            ->with('primary', "Mesa editado correctamente.");
    }

    public function destroy(mesa $mesa)
    {
        $mesa->delete();
        return redirect()->route('mesa.index')
            ->with('danger', "Mesa eliminado correctamente.");
    }
}

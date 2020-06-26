<?php

namespace App\Http\Controllers;

use App\Http\Requests\MeseroRequests;
use App\mesero;
use Illuminate\Http\Request;

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
        $mesero->delete();
        return redirect()->route('mesero.index')
            ->with('danger', "Mesero eliminado correctamente.");
    }
}
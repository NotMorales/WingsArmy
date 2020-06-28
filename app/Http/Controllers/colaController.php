<?php

namespace App\Http\Controllers;

use App\cola;
use App\mesero;
use Illuminate\Http\Request;

class colaController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public static function store($meseroId)
    {
        cola::create([
            'meseroId' => $meseroId,
            'posicion' => 1,
            'contador' => 0
        ]);
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

    public static function destroy($meseroId)
    {
        cola::where('meseroId', $meseroId)->delete();
    }
    public static function moverCola($mesero)
    {
        cola::where('meseroId', $mesero->meseroId)->delete();
        colaController::store( $mesero->meseroId );
    }
}

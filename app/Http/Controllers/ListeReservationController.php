<?php

namespace App\Http\Controllers;

use App\ListeReservation;
use Illuminate\Http\Request;

class ListeReservationController extends Controller
{

    public function showAll()
    {
        return response()->json(ListeReservation::all());
    }

    public function showOne($id)
    {
        return response()->json(ListeReservation::find($id));
    }

    public function create(Request $request)
    {
        $a = ListeReservation::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= ListeReservation::findOrFail($id);
        $a->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        ListeReservation::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function showAll()
    {
        return response()->json(Reservation::all());
    }

    public function showOne($id)
    {
        return response()->json(Reservation::find($id));
    }

    public function create(Request $request)
    {
        $a = Reservation::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Reservation::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Reservation::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
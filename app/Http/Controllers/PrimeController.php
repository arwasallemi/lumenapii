<?php
namespace App\Http\Controllers;

use App\Prime;
use Illuminate\Http\Request;

class PrimeController extends Controller
{

    public function showAll()
    {
        return response()->json(Prime::all());
    }

    public function showOne($id)
    {
        return response()->json(Prime::find($id));
    }

    public function create(Request $request)
    {
        $a = Prime::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Prime::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Prime::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
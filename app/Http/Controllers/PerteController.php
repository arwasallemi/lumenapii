<?php
namespace App\Http\Controllers;

use App\Perte;
use Illuminate\Http\Request;

class PerteController extends Controller
{

    public function showAll()
    {
        return response()->json(Perte::all());
    }

    public function showOne($id)
    {
        return response()->json(Perte::find($id));
    }

    public function create(Request $request)
    {
        $a = Perte::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Perte::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Perte::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
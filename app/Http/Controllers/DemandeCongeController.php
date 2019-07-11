<?php
namespace App\Http\Controllers;

use App\DemandeConge;
use Illuminate\Http\Request;

class DemandeCongeController extends Controller
{

    public function showAll()
    {
        return response()->json(DemandeConge::all());
    }

    public function showOne($id)
    {
        return response()->json(DemandeConge::find($id));
    }

    public function create(Request $request)
    {
        $a = DemandeConge::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= DemandeConge::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        DemandeConge::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
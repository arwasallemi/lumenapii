<?php
namespace App\Http\Controllers;

use App\SoldeConge;
use Illuminate\Http\Request;

class SoldeCongeController extends Controller
{

    public function showAll()
    {
        return response()->json(SoldeConge::all());
    }

    public function showOne($id)
    {
        return response()->json(SoldeConge::find($id));
    }

    public function create(Request $request)
    {
        $a = SoldeConge::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= SoldeConge::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        SoldeConge::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
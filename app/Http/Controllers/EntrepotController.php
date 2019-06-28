<?php
namespace App\Http\Controllers;

use App\Entrepot;
use Illuminate\Http\Request;

class EntrepotController extends Controller
{

    public function showAll()
    {
        return response()->json(Entrepot::all());
    }

    public function showOne($id)
    {
        return response()->json(Entrepot::find($id));
    }

    public function create(Request $request)
    {
        $a = Entrepot::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Entrepot::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Entrepot::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
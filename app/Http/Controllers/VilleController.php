<?php
namespace App\Http\Controllers;

use App\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{

    public function showAll()
    {
        return response()->json(Ville::all());
    }

    public function showOne($id)
    {
        return response()->json(Ville::find($id));
    }

    public function create(Request $request)
    {
        $a = Ville::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Ville::findOrFail($id);
        $a->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Ville::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
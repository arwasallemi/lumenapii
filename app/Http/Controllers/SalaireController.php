<?php
namespace App\Http\Controllers;

use App\Salaire;
use Illuminate\Http\Request;

class SalaireController extends Controller
{

    public function showAll()
    {
        return response()->json(Salaire::all());
    }

    public function showOne($id)
    {
        return response()->json(Salaire::find($id));
    }

    public function create(Request $request)
    {
        $a = Salaire::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Salaire::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Salaire::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
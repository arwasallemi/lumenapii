<?php
namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function showAll()
    {
        return response()->json(Categorie::all());
    }

    public function showOne($id)
    {
        return response()->json(Categorie::find($id));
    }

    public function create(Request $request)
    {
        $a = Categorie::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Categorie::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Categorie::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
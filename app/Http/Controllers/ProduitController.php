<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function showAll()
    {
        return response()->json(Produit::all());
    }

    public function showOne($id)
    {
        return response()->json(Produit::find($id));
    }

    public function create(Request $request)
    {
        $a = Produit::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Produit::findOrFail($id);
        $a->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Produit::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
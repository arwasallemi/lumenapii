<?php

namespace App\Http\Controllers;

use App\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{

    public function showAll()
    {
        return response()->json(Facture::all());
    }

    public function showOne($id)
    {
        return response()->json(Facture::find($id));
    }

    public function create(Request $request)
    {
        $author = Facture::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Facture::findOrFail($id);
        $author->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Facture::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
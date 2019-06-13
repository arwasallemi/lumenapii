<?php

namespace App\Http\Controllers;

use App\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{

    public function showAllClients()
    {
        return response()->json(Devis::all());
    }

    public function showOneClient($id)
    {
        return response()->json(Devis::find($id));
    }

    public function create(Request $request)
    {
        $author = Devis::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Devis::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Devis::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
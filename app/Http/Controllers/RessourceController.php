<?php

namespace App\Http\Controllers;

use App\Ressource;
use Illuminate\Http\Request;

class RessourceController extends Controller
{

    public function showAll()
    {
        return response()->json(Ressource::all());
    }

    public function showOne($id)
    {
        return response()->json(Ressource::find($id));
    }

    public function create(Request $request)
    {
        $a = Ressource::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Ressource::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Ressource::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
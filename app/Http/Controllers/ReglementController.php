<?php

namespace App\Http\Controllers;

use App\reglement;
use Illuminate\Http\Request;

class ReglementController extends Controller
{

    public function showAll()
    {
        return response()->json(reglement::all());
    }

    public function showOne($id)
    {
        return response()->json(reglement::find($id));
    }

    public function create(Request $request)
    {
        $author = reglement::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = reglement::findOrFail($id);
        $author->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        reglement::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
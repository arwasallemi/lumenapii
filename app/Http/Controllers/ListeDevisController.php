<?php
namespace App\Http\Controllers;

use App\ListeDevis;
use Illuminate\Http\Request;

class ListeDevisController extends Controller
{

    public function showAll()
    {
        return response()->json(ListeDevis::all());
    }

    public function showOne($id)
    {
        return response()->json(ListeDevis::find($id));
    }

    public function create(Request $request)
    {
        $a = ListeDevis::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= ListeDevis::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        ListeDevis::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
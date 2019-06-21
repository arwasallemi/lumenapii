<?php
namespace App\Http\Controllers;

use App\ListeBonRetour;
use Illuminate\Http\Request;

class ListeBonRetourController extends Controller
{

    public function showAll()
    {
        return response()->json(ListeBonRetour::all());
    }

    public function showOne($id)
    {
        return response()->json(ListeBonRetour::find($id));
    }

    public function create(Request $request)
    {
        $a = ListeBonRetour::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= ListeBonRetour::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        ListeBonRetour::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
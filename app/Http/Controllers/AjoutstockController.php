<?php
namespace App\Http\Controllers;

use App\Ajoutstock;
use Illuminate\Http\Request;

class AjoutstockController extends Controller
{

    public function showAll()
    {
        return response()->json(Ajoutstock::all());
    }

    public function showOne($id)
    {
        return response()->json(Ajoutstock::find($id));
    }

    public function create(Request $request)
    {
        $a = Ajoutstock::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Ajoutstock::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Ajoutstock::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
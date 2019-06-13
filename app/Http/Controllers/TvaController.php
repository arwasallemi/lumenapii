<?php
namespace App\Http\Controllers;

use App\Tva;
use Illuminate\Http\Request;

class TvaController extends Controller
{

    public function showAll()
    {
        return response()->json(Tva::all());
    }

    public function showOne($id)
    {
        return response()->json(Tva::find($id));
    }

    public function create(Request $request)
    {
        $a = Tva::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Tva::findOrFail($id);
        $a->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Tva::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
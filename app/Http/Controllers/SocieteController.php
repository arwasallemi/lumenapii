<?php
namespace App\Http\Controllers;

use App\Societe;
use Illuminate\Http\Request;

class SocieteController extends Controller
{

    public function showAll()
    {
        return response()->json(Societe::all());
    }

    public function showOne($id)
    {
        return response()->json(Societe::find($id));
    }

    public function create(Request $request)
    {
        $a = Societe::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Societe::findOrFail($id);
        $a->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Societe::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
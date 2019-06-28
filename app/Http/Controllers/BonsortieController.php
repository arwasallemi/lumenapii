<?php
namespace App\Http\Controllers;

use App\Bonsortie;
use Illuminate\Http\Request;

class BonsortieController extends Controller
{

    public function showAll()
    {
        return response()->json(Bonsortie::all());
    }

    public function showOne($id)
    {
        return response()->json(Bonsortie::find($id));
    }

    public function create(Request $request)
    {
        $a = Bonsortie::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Bonsortie::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Bonretour::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
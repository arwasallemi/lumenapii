<?php
namespace App\Http\Controllers;

use App\Bonretour;
use Illuminate\Http\Request;

class BonretourController extends Controller
{

    public function showAll()
    {
        return response()->json(Bonretour::all());
    }

    public function showOne($id)
    {
        return response()->json(Bonretour::find($id));
    }

    public function create(Request $request)
    {
        $a = Bonretour::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Bonretour::findOrFail($id);
        $a->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Bonretour::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
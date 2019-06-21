<?php
namespace App\Http\Controllers;

use App\Delai;
use Illuminate\Http\Request;

class DelaiController extends Controller
{

    public function showAll()
    {
        return response()->json(Delai::all());
    }

    public function showOne($id)
    {
        return response()->json(Delai::find($id));
    }

    public function create(Request $request)
    {
        $a = Delai::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Delai::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Delai::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
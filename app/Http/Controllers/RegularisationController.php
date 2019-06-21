<?php
namespace App\Http\Controllers;

use App\Regularisation;
use Illuminate\Http\Request;

class RegularisationController extends Controller
{

    public function showAll()
    {
        return response()->json(Regularisation::all());
    }

    public function showOne($id)
    {
        return response()->json(Regularisation::find($id));
    }

    public function create(Request $request)
    {
        $a = Regularisation::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Regularisation::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Regularisation::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
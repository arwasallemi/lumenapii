<?php
namespace App\Http\Controllers;

use App\Pointage;
use Illuminate\Http\Request;

class PointageController extends Controller
{

    public function showAll()
    {
        return response()->json(Pointage::all());
    }

    public function showOne($id)
    {
        return response()->json(Pointage::find($id));
    }

    public function create(Request $request)
    {
        $a = Pointage::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Pointage::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Pointage::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
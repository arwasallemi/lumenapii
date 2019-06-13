<?php
namespace App\Http\Controllers;

use App\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{

    public function showAll()
    {
        return response()->json(Condition::all());
    }

    public function showOne($id)
    {
        return response()->json(Condition::find($id));
    }

    public function create(Request $request)
    {
        $a = Condition::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Condition::findOrFail($id);
        $a->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Condition::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
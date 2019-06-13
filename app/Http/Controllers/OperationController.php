<?php
namespace App\Http\Controllers;

use App\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{

    public function showAll()
    {
        return response()->json(Operation::all());
    }

    public function showOne($id)
    {
        return response()->json(Operation::find($id));
    }

    public function create(Request $request)
    {
        $a = Operation::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Operation::findOrFail($id);
        $a->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Operation::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
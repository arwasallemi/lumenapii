<?php
namespace App\Http\Controllers;

use App\ListFact;
use Illuminate\Http\Request;

class ListFactController extends Controller
{

    public function showAll()
    {
        return response()->json(ListFact::all());
    }

    public function showOne($id)
    {
        return response()->json(ListFact::find($id));
    }

    public function create(Request $request)
    {
        $a = ListFact::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= ListFact::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        ListFact::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
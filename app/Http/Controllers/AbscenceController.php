<?php
namespace App\Http\Controllers;

use App\Absence;
use Illuminate\Http\Request;

class AbscenceController extends Controller
{

    public function showAll()
    {
        return response()->json(Absence::all());
    }

    public function showOne($id)
    {
        return response()->json(Absence::find($id));
    }

    public function create(Request $request)
    {
        $a = Absence::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Absence::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Absence::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
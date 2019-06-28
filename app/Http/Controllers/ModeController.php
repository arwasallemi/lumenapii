<?php
namespace App\Http\Controllers;

use App\Mode;
use Illuminate\Http\Request;

class ModeController extends Controller
{

    public function showAll()
    {
        return response()->json(Mode::all());
    }

    public function showOne($id)
    {
        return response()->json(Mode::find($id));
    }

    public function create(Request $request)
    {
        $a = Mode::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Mode::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Mode::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
<?php
namespace App\Http\Controllers;

use App\Employeur;
use Illuminate\Http\Request;

class EmployeurController extends Controller
{

    public function showAll()
    {
        return response()->json(Employeur::all());
    }

    public function showOne($id)
    {
        return response()->json(Employeur::find($id));
    }

    public function create(Request $request)
    {
        $a = Employeur::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Employeur::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Employeur::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
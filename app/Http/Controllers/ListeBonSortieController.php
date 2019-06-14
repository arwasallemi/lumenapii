<?php
namespace App\Http\Controllers;

use App\ListeBonSortie;
use Illuminate\Http\Request;

class ListeBonSortieController extends Controller
{

    public function showAll()
    {
        return response()->json(ListeBonSortie::all());
    }

    public function showOne($id)
    {
        return response()->json(ListeBonSortie::find($id));
    }

    public function create(Request $request)
    {
        $a = ListeBonSortie::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= ListeBonSortie::findOrFail($id);
        $a->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        ListeBonSortie::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
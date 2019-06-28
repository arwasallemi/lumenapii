<?php
namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function showAll()
    {
        return response()->json(Region::all());
    }

    public function showOne($id)
    {
        return response()->json(Region::find($id));
    }

    public function create(Request $request)
    {
        $a = Region::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Region::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Region::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
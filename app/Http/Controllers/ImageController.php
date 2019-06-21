<?php
namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function showAll()
    {
        return response()->json(Image::all());
    }

    public function showOne($id)
    {
        return response()->json(Image::find($id));
    }

    public function create(Request $request)
    {
        $a = Image::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Image::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Image::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
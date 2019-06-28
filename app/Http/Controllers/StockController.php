<?php
namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{

    public function showAll()
    {
        return response()->json(Stock::all());
    }

    public function showOne($id)
    {
        return response()->json(Stock::find($id));
    }

    public function create(Request $request)
    {
        $a = Stock::create($request->all());

        return response()->json($a, 201);
    }

    public function update($id, Request $request)
    {
        $a= Stock::findOrFail($id);
        $a->update($request->all());

        return response()->json($a, 200);
    }

    public function delete($id)
    {
        Stock::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
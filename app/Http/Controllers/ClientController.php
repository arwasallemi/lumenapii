<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function showAllClients()
    {
        return response()->json(Client::all());
    }

    public function showOneClient($id)
    {
        return response()->json(Client::find($id));
    }

    public function create(Request $request)
    {
        $author = Client::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Client::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Client::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
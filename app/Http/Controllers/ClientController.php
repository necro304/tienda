<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $clients = Client::all();

        return view("client.index", compact("clients"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("client.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'nullable|numeric|min:10',
            'address' => 'nullable',
        ]);

        $client = new Client();
        $client->name = $request->get("name");
        $client->phone = $request->get("phone");
        $client->address = $request->get("address");
        $client->save();

        return redirect()->route("clients");


    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view("client.edit", compact("client"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'nullable|numeric|min:10',
            'address' => 'nullable',
        ]);

        $client->name = $request->get("name");
        $client->phone = $request->get("phone");
        $client->address = $request->get("address");
        $client->save();

        return redirect()->route("clients");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route("clients");
    }
}

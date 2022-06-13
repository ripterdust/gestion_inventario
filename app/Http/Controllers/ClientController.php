<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('search')){
            $search = $request->search;

            $clients = Client::where('name', 'like', "%{$search}%")
                ->get();

            return view('dashboard.client', [
                'clients' => $clients,
                'total' => count($clients)
            ]);
        }

        $clients = Client::all();


        return view('dashboard.client', [
            'clients' => $clients,
            'total' => count($clients)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mail' => 'required|string|unique:clients',
            'name' => 'required|string',
            'phone' => 'required|string',
            'adress' => 'string'
        ]);

        // Saving the client
        $client = new Client;
        $client->mail = $request->mail;
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->adress = $request->adress;
        $client->birth = $request->birth;
        $client->nit = $request->nit;
        $client->save();

        return redirect()->route('clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            "name" => 'required',
            "birth" => 'required',
            "mail" => 'required',
            "nit" => 'required',
        ]);

        $client = Client::find($id);

        $client->name = $request->name;
        $client->birth = $request->birth;
        $client->mail = $request->mail;
        $client->nit = $request->nit;
        $client->adress = $request->adress;
        $client->phone = $request->phone;
        $client->save();

        return redirect()->route('clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('clients');
    }
}

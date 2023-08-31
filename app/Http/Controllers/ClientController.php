<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function index()
    {
        $clients = $this->client->with('address')->paginate(10);

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $this->validateClientData($request);

        if ($validator->fails()) {
            return redirect()->route('clients.create')
                ->withErrors($validator)
                ->withInput();
        }

        $client = new Client([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'birthdate' => $request->input('birthdate'),
        ]);

        $client->save();

        $address = new Address([
            'zip_code' => $request->input('zip_code'),
            'street' => $request->input('street'),
            'house_number' => $request->input('house_number'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
        ]);

        $client->address()->save($address);

        return redirect()->route('clients.index')
            ->with('success', 'Cliente cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $validator = $this->validateClientData($request);

        if ($validator->fails()) {
            return redirect()->route('clients.edit', $client)
                ->withErrors($validator)
                ->withInput();
        }

        $client->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'birthdate' => $request->input('birthdate'),
        ]);

        $client->address()->update([
            'zip_code' => $request->input('zip_code'),
            'street' => $request->input('street'),
            'house_number' => $request->input('house_number'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
        ]);

        return redirect()->route('clients.show', $client)
            ->with('success', 'Cliente atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente deletado com sucesso.');
    }

    private function validateClientData(Request $request)
    {
        return Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cpf' => 'required|string|max:11',
            'birthdate' => 'required|date',
            'zip_code' => 'required|string|max:8',
            'street' => 'required|string|max:255',
            'house_number' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:2',
        ]);
    }
}

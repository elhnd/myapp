<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }
   
    //Affiche tous les clients  
    public function index(){

       $clients = Client::all();
       
        return view('clients.index',compact('clients'));
    }

    public function create(){
        
        $entreprises = Entreprise::all();
        $client = new Client();
        return view('clients.create',compact('entreprises','client'));
    }

    public function store(){

        $client = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'status' =>'required|integer',
            'entreprise_id' => 'required|integer'
        ]);

        Client::create($client);
 
        return back();

    }
    //Retourne les infos d'un client dans la vue show
    public function show(Client $client){

        return view('clients.show',compact('client'));
    }

    public function edit(Client $client){

        $entreprises = Entreprise::all();

        return view('clients.edit',compact('client','entreprises'));

    }

    public function update(Client $client){
        
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'status' =>'required|integer',
            'entreprise_id' => 'required|integer'
        ]);
        
        $client->update($data);

        return redirect('clients/'. $client->id);
    }

    public function destroy(Client $client){

        $client->delete();
        return redirect('clients');
    }

}

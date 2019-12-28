@extends('layouts.app')

@section('content')
<h1>
    CLIENTS
</h1>

<a type="submit" href="clients/create" class="btn btn-primary my-3">Ajouter un client</a>
 
<ul>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Status</th>
                <th scope="col">Entreprise</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <th scope="row">{{$client->id}}</th>
                <td><a href="/clients/{{$client->id}}">{{$client->name}}</a></td>
                    <td>{{$client->status}}</td>
                    <td>{{$client->entreprise->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</ul>

@endsection
@extends('layouts.app')

@section('content')
    @if (!session()->has('message'))
    <form action="/contact" method="POST">
        @csrf
    
            <div class="form-group">
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                    placeholder="Entrez votre nom..." value="{{ old('name')}}">
                @error('name')
                    <div class="invalid-feedback alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" 
                    placeholder="Entrez votre email" value="{{ old('email')}}">
                @error('email')
                    <div class="invalid-feedback alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <textarea name="message" cols="30" rows="10" class="form-control @error('message') is-invalid @enderror" 
                    placeholder="Entrez votre message" value="{{ old('message')}}"></textarea>
                @error('message')
                    <div class="invalid-feedback alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            <button type="submit" class="btn btn-primary">Envoyer un message</button>
        </form>
    @endif
    
@endsection
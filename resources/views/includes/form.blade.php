@csrf
<div class="form-group">
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" 
        placeholder="Entrez un name" value="{{ old('name') ?? $client->name}}">
    @error('name')
        <div class="invalid-feedback alert alert-danger">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <input name="email" type="emal" class="form-control @error('email') is-invalid @enderror" 
        placeholder="Entrez un email" value="{{ old('email') ?? $client->email}}">
    @error('email')
        <div class="invalid-feedback alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <select name="status" class="custom-select @error('status') is-invalid @enderror">
        @foreach ($client->getStatusOptions() as $key => $value)
            <option value="{{$key}}" {{$client->status == $value ? 'selected': ''}}>{{$value}}</option> 
        @endforeach
    </select>
    
    @error('status')
        <div class="invalid-feedback alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <select name="entreprise_id" class="custom-select @error('entreprise_id') is-invalid @enderror">
        @foreach ($entreprises as $entreprise)
            <option value="{{$entreprise->id}}" {{$client->entreprise_id == $entreprise->id ? 'selected' : ''}}>{{$entreprise->name}}</option>
        @endforeach   
    </select>

    @error('entreprise_id')
        <div class="invalid-feedback alert alert-danger">{{$message}}</div>
    @enderror
</div>
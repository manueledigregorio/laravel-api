@extends('layouts.admin')

@section('content')

@if($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        {{-- $erroro->all() è una  funzione che restituisce tutti gli errori presenti nel form mettendoli in un array  --}}
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>
@endif

<div class="container w-100 pt-5">

    <h1>Modifica il progetto</h1>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $project->name) }}">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Tipo </label>
            <select name="type_id" class="form-select @error('type_id') is-invalid @enderror" >
                <option value=""></option>
                @foreach ($types as  $type)
                <option value="{{$type->id}}" {{ old('type_id', $project?->type_id) == $type->id?'selected' : '' }}
                    >{{$type->name}}</option>
                @endforeach

            </select>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="description" name="description"
            value="{{ old('description', $project->description) }}">
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                @foreach ($tecnologies as $tecnology)

                    <input  type="checkbox" class="btn-check" id="technology{{$tecnology->id}}" autocomplete="off" name="tecnologies[]" value="{{$tecnology->id}}"
                    @if ($project->tecnologies->contains($tecnology->id)) checked @endif>

                    <label class="btn btn-outline-primary" for="technology{{$tecnology->id}}">{{$tecnology->name}}</label>

                @endforeach
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-secondary">Annulla</button>

    </form>

    @endsection


</div>


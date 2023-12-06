@extends('layouts.admin')

@section('content')



<div class="container w-100 pt-5">

    <h1>crea la tua versione</h1>

    <form action="{{ route('admin.technologies.store') }}" method="POST">
        {{-- elemnto da inserire i  tutti i form di Laravel per un conctrollo di sicurezza  --}}
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}">
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="version" class="form-label">Version</label>
            <input type="Version" class="form-control @error('type') is-invalid @enderror" id="version" name="version" value="{{ old('version') }}">
            @error('version')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-secondary">Annulla</button>

    </form>

    @endsection


</div>


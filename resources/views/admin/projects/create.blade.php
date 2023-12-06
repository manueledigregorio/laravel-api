@extends('layouts.admin')

@section('content')



<div class="container w-100 pt-5">

    <h1>crea la tua versione</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST">
        {{-- elemnto da inserire i  tutti i form di Laravel per un conctrollo di sicurezza  --}}
        @csrf

        <div class="mb-3">
            <label for="type_id" class="form-label">Tipo </label>
            <select name="type_id" class="form-select @error('type_id') is-invalid @enderror" >
                <option value=""></option>
                @foreach ($types as  $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach

            </select>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

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
            @foreach ($tecnologies as $tecnology)
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="technology{{$tecnology->id}}" autocomplete="off" name="tecnologies[]" value="{{$tecnology->id}}">
                    <label class="btn btn-outline-primary" for="technology{{$tecnology->id}}">{{$tecnology->name}}</label>
              </div>
            @endforeach

        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-secondary">Annulla</button>

    </form>

    @endsection


</div>


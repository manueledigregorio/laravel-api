@extends('layouts.admin')

@section('content')
<div class="container pt-5">
    <div class="card">
        @if ($project->image !== null)
                <div class="w-50">
                    <img class="img-fluid" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}">
                    <p>{{ $project->image_name }}</p>
                </div>
            @else
                <img src="/img/placeholder.webp" alt="{{$project->name}}">
        @endif

        <div class="card-body">
          <h5 class="card-title">Name: {{$project->name}}</h5>
          <p class="card-text">Description: {{$project->description}}</p>
          <p class="card-text">Type: {{$project->type?->name  ?? '-'}}</p>
        </div>
      </div>
</div>

@endsection

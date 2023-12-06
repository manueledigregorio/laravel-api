@extends('layouts.admin')

@section('content')
<div class="container pt-5">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Tipo</th>
            <th scope="col">tecnologie</th>
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>{{$project->name}}</td>
            <td>{{$project->description}}</td>
            <td>{{$project->type?->name ?? '-'}}</td>
            <td>
                 @forelse ($project->tecnologies as $tecnology)
                      <a class="btn btn-danger " href="{{route('admin.tecnology-projects', $tecnology)}}">{{$tecnology->name}}</a>
                 @empty
                    -
                 @endforelse
            </td>
            <td>
                <a href="{{route('admin.projects.edit',$project )}}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                <form
                    class="d-inline-block"
                    action="{{ route('admin.technologies.destroy', $project) }}"
                    method="POST"
                    onsubmit="return confirm('Sei sicuro di voler eliminare {{ $project->name }}?')"
                >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>

                </form>
        </td>
        </tr>
        @endforeach
        </tbody>
    </table>
  {{ $projects->links() }}
</div>

@endsection

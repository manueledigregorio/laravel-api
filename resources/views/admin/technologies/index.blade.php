@extends('layouts.admin')

@section('content')
<div class="container pt-5">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">version</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($technologies as $technology)
        <tr>
            <td>{{$technology->name}}</td>
            <td>{{$technology->description}}</td>
            <td>{{$technology->version}}</td>
            <td>
                <form
                    class="d-inline-block"
                    action="{{ route('admin.technologies.destroy', $technology) }}"
                    method="POST"
                    onsubmit="return confirm('Sei sicuro di voler eliminare {{ $technology->name }}?')"
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
  {{ $technologies->links() }}
</div>

@endsection

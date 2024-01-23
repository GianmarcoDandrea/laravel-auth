@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>List of Projects</h2>

        <div class="text-end">
            <a class="btn btn-success" href="{{ route('admin.projects.create') }}">
                <i class="fa-regular fa-plus"></i>
            </a>
        </div>

        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td scope="row">{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">
                                Details
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="edit">
        <h1>Edit Project</h1>
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
            </div>
            <div class="mb-3">
                <label for="date_start" class="form-label">Date start</label>
                <input type="date" name="date_start" class="form-control" id="date_start"
                    value="{{ $project->date_start }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ $project->description }}</textarea>
            </div>
            <a href="{{ route('admin.projects.index') }}" type="submit" class="btn btn-primary">Abort</a>
        </form>
    </div>
    @endsection

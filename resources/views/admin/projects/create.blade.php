@extends('layouts.admin')

@section('content')
    <div class="create">
        <h1 class="text-center">Add new Project</h1>

        @if (session('success'))
            <div id="error-message" class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container-fluid my-5">
            <div class="row">
                <div class="col">


                    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="date_start" class="form-label ">Date
                                start</label>
                            <input type="date" name="date_start"
                                class="form-control @error('date_start') is-invalid @enderror" id="date_start"
                                value="{{ old('date_start') }}">
                            @error('date_start')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="date_start" class="form-label ">Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                id="image" value="{{ old('image') }}">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label ">description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"
                                name="description">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="{{ route('admin.projects.index') }}" type="reset" class="btn btn-secondary">Abort</a>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection


@section('title')
    | Add new Project
@endsection

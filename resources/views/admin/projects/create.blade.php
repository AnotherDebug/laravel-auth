@extends('layouts.admin')

@section('content')
    <div class="create">
        <h1 class="text-center">Add new Project</h1>

        <div class="container-fluid my-5">
            <div class="row">
                <div class="col">


                    <form action="{{ route('admin.projects.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="date_start" class="form-label">Date start</label>
                            <input type="date" name="date_start" class="form-control" id="date_start">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Aggiungi</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection

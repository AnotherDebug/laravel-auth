@extends('layouts.admin')



@section('content')

<div class="projectList ms-5 pt-5">
    <h1>Projects List</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Date_start</th>
        <th scope="col">Description</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
      <tr>
        <td>{{ $project->id }}</td>
        <td>{{ $project->name }}</td>
        <td>{{ date('d/m/Y', strtotime($project->date_start)) }}</td>
        <td>{{ $project->description }}</td>
        <td><a class="btn btn-warning" href="#"><i class="fa-solid fa-pencil"></i></a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
  {{ $projects->links() }}
</div>



@endsection

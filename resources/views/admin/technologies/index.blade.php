@extends('layouts.admin')



@section('content')
    <div class="projectList ms-5 pt-5 pe-5">
        <h1 class="text-center">Technologies List</h1>

        @if (session('error'))
            <div id="error-message" class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Technology_name</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($technologies as $technology)
                    <tr>
                        <td>{{ $technology->name }}</td>
                    </tr>
                @endforeach --}}

            </tbody>
        </table>
        {{-- {{ $technologies->links() }} --}}
    </div>
@endsection


@section('title')
    | Technologies List
@endsection

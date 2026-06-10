@extends('layouts/app')
@section('title')
    <title>Category List</title>
@endsection
@section('content')

    <h2>Category List</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Add New</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $index => $category)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->desc }}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <a href="" class="btn btn-info" data-bs-toggle="modal"
                            data-bs-target="#category{{ $category->id }}">View</a>
                        |
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                        |
                        <a href="" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteCategory{{ $category->id }}">Delete</a>

                        <!-- Modal -->
                        @include('categories.show')
                        @include('categories.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

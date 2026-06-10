@extends('layouts/app')
@section('title')
    <title>Edit Category</title>
@endsection
@section('content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-5 col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center mb-4">Update Category</h4>

                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{ $category->name }}" name="name"
                                class="form-control form-control-sm">
                        </div>

                        <div class="mb-3">
                            <label for="desc" class="form-label">Description</label>
                            <textarea name="desc" class="form-control form-control-sm" rows="3">{{ $category->desc }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success btn-sm w-100">
                            Save
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

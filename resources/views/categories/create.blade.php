@extends('layouts/app')
@section('title')
    <title>Create Category</title>
@endsection
@section('content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-5 col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center mb-4">Create Category</h4>

                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm">
                        </div>

                        <div class="mb-3">
                            <label for="desc" class="form-label">Description</label>
                            <textarea name="desc" class="form-control form-control-sm" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm w-100">
                            Submit
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

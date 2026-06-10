<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Categories</title> --}}
    @yield('title')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">MyApp</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/categories">Categories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/movies">Movies</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/customers">Customers</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        {{-- <h2>Category List</h2> --}}
        {{-- <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Add New</a>

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
                            <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">Edit</a>
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
        </table> --}}
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>



@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid">

    <form method="GET" action="{{ route('admin.categories.index') }}" class="row mb-4">
        <div class="col-md-3">
            <input type="text" name="name" class="form-control" placeholder="Search by name..." value="{{ request('name') }}">
        </div>
        <div class="col-md-3">
            <select name="service_id" class="form-control" onchange="this.form.submit()">
                <option value="">Filter by service</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ request('service_id') == $service->id ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn" style="background-color: #FF5B2E; color: white;">Filter</button>
            <a href="{{ route('admin.categories.index') }}" class="btn" style="background-color: #FF5B2E;color:white">
                Reset
            </a>
        </div>
    </form>

    <div class="mb-4">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-lg" style="background-color: #FF5B2E; color: white;">
            <i class="fas fa-plus-circle"></i> Add Category
        </a>
    </div>

    <div class="row" id="categoryList">
    @if($categories->isEmpty())
        <div class="col-12 text-center">
            <p>No categories found</p>
        </div>
    @else
        @foreach($categories as $category)
            <div class="col-xl-3 col-md-4 col-sm-6 mb-4 category-card" data-name="{{ strtolower($category->name) }}">
                <div class="card shadow h-100 py-3">
                    <div class="card-body text-center">
                        <img src="{{ $category->icon ? asset('storage/'.$category->icon) : asset('assets/images/Default.png') }}" 
                             class="rounded-circle mb-3" style="width: 100px; height: 100px;" alt="Category Icon">

                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text text-muted">{{ $category->service->name }}</p>

                        <div class="d-flex justify-content-center align-items-center">
    <button type="button" class="btn btn-info btn-sm mx-2" data-bs-toggle="modal" data-bs-target="#categoryModal-{{ $category->id }}">
        <i class="fas fa-eye"></i> View
    </button>

    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-sm mx-2">
        <i class="fas fa-edit"></i> Edit
    </a>

    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="d-inline-block" id="deleteForm-{{ $category->id }}">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger btn-sm mx-2 delete-btn" data-id="{{ $category->id }}">
            <i class="fas fa-trash-alt"></i> Delete
        </button>
    </form>
</div>


                    </div>
                </div>
            </div>

            <!-- Modal for each category -->
            <div class="modal fade" id="categoryModal-{{ $category->id }}" tabindex="-1" aria-labelledby="categoryModalLabel-{{ $category->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="categoryModalLabel-{{ $category->id }}" style="color: #FF5B2E;">Category Details - {{ $category->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Icon:</strong></p>
                            <img src="{{ $category->icon ? asset('storage/'.$category->icon) : asset('assets/images/Default.png') }}" class="rounded-circle" style="width: 100px; height: 100px;" alt="Category Icon">
                            
                            <p><strong>Name:</strong> {{ $category->name }}</p>
                            <p><strong>Service:</strong> {{ $category->service->name }}</p>
                            <p><strong>Description:</strong> {{ $category->description ?? 'No Description' }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #FF5B2E; color: white;">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    @endif
    <div class="text-center mt-4">
        {{ $categories->links('pagination::bootstrap-4') }}
    </div>
</div>

<script>
   document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function () {
            let categoryId = this.getAttribute("data-id");

            Swal.fire({
                title: "Are you sure?",
                text: "This action cannot be undone!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#FF5B2E",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("deleteForm-" + categoryId).submit();
                }
            });
        });
    });
});

</script>

@endsection

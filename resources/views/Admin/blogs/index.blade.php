
@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid">
    <form method="GET" action="{{ route('admin.blogs.index') }}" class="row mb-4">
        <div class="col-md-3">
            <input type="text" name="title" class="form-control" placeholder="Search by title..." value="{{ request('title') }}">
        </div>
        <div class="col-md-3">
            <select name="user_id" class="form-control">
    <option value="">Select Employee</option>
    @foreach($users as $user)
        <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
            {{ $user->name }}
        </option>
    @endforeach
</select>

        </div>
        <div class="col-md-3">
            <select name="service_type" class="form-control">
                <option value="">Select Service</option>
                @foreach($services as $service)
                    <option value="{{ $service->name }}" {{ request('service_type') == $service->name ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn" style="background-color: #FF5B2E; color: white;">Filter</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn" style="background-color: #FF5B2E;color:white">
                Reset
            </a>
        </div>
    </form>

    <div class="mb-4">
     <h2>Employee Blogs</h2>
        
    </div>

    <div class="row" id="blogList">
    @if($blogs->isEmpty())
        <div class="col-12 text-center">
            <p>No blogs found</p>
        </div>
    @else
        @foreach($blogs as $blog)
            <div class="col-xl-3 col-md-4 col-sm-6 mb-4 blog-card">
                <div class="card shadow h-100 py-3">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text text-muted">Service Type: {{ $blog->service->name }}</p>
                        <p class="card-text text-muted">Author: {{ $blog->user->name }}</p>

                        <div class="d-flex justify-content-center align-items-center">
    <button type="button" class="btn btn-info btn-sm mx-2" data-bs-toggle="modal" data-bs-target="#blogModal-{{ $blog->id }}">
        <i class="fas fa-eye"></i> View
    </button>

    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" id="deleteForm-{{ $blog->id }}">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger btn-sm mx-2 delete-btn" data-id="{{ $blog->id }}">
            <i class="fas fa-trash-alt"></i> Delete
        </button>
    </form>
</div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="blogModal-{{ $blog->id }}" tabindex="-1" aria-labelledby="blogModalLabel-{{ $blog->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="blogModalLabel-{{ $blog->id }}" style="color: #FF5B2E;">Blog Details - {{ $blog->title }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Title:</strong> {{ $blog->title }}</p>
                            <p><strong>Service Type:</strong> {{ $blog->service->name }}</p>
                            <p><strong>Author:</strong> {{ $blog->user->name }}</p>
                            <p><strong>Content:</strong> {{ $blog->content }}</p>
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
        {{ $blogs->links('pagination::bootstrap-4') }}
    </div>
</div>

<script>
   document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function () {
            let blogId = this.getAttribute("data-id");

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
                    document.getElementById("deleteForm-" + blogId).submit();
                }
            });
        });
    });
});
</script>

@endsection

@extends('layouts.employee-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>{{ isset($blog) ? 'Edit Blog' : 'Create Blog' }}</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ isset($blog) ? route('employee.blogs.update', $blog->id) : route('employee.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($blog))
                        @method('PUT')
                    @endif
                    
                    <!-- Title Field -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Blog Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ isset($blog) ? $blog->title : '' }}" required>
                    </div>
                 
                    <!-- Service Type Dropdown (Set to Auth User's Service) -->
                    <div class="mb-3">
    <label for="service_id" class="form-label">Service Type</label>
    <select id="service_id" name="service_id" class="form-control" required>
        <option value="{{ Auth::user()->employee->service->id }}" selected>
            {{ Auth::user()->employee->service->name }}
        </option>
    </select>
</div>

                    <!-- Blog Content -->
                    <div class="mb-3">
                        <label for="content" class="form-label">Blog Content</label>
                        <textarea id="content" name="content" class="form-control" rows="4" required>{{ isset($blog) ? $blog->content : '' }}</textarea>
                    </div>

                    <!-- Author (Owner) Dropdown (Set to Auth User and disabled) -->
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Author</label>
                        <select id="user_id" name="user_id" class="form-control" required disabled>
                            <option value="{{ Auth::id() }}" selected>{{ Auth::user()->name }}</option>
                        </select>
                    </div>

                    <!-- Blog Image Upload -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Blog Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                        @if(isset($blog) && $blog->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$blog->image) }}" alt="Blog Image" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">{{ isset($blog) ? 'Update Blog' : 'Create Blog' }}</button>
                        <a href="{{ route('employee.blogs.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    // Optional: Additional JS for form validation
    function validateForm() {
        let title = document.getElementById('title').value.trim();
        return true;
    }
</script>

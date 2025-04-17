@extends('layouts.employee-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>Edit Blog</h4>
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

                <form action="{{ route('employee.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Title Field -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Blog Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                    </div>

                    <!-- Service Type (Static Display) -->
                    <div class="mb-3">
                        <label for="service_id" class="form-label">Service Type</label>
                        <select id="service_id" name="service_id" class="form-control" required>
    <option value="{{ $service->id }}" selected>{{ $service->name }}</option>
</select>

                    </div>

                    <!-- Pet Selection -->
                    

                    <!-- Content -->
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea id="content" name="content" class="form-control" rows="4" required>{{ old('content', $blog->content) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Other Content</label>
                        <textarea id="content" name="content_other" class="form-control" rows="4" >{{ old('content_other', $blog->content_other) }}</textarea>
                    </div>

                    <!-- Long Description -->
                    

                    <!-- Author Info (Disabled Display Only) -->
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Author</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Blog Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                        @if($blog->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$blog->image) }}" alt="Blog Image" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">Update Blog</button>
                        <a href="{{ route('employee.blogs.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.Admin-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>{{ isset($service) ? 'Edit Service' : 'Create Service' }}</h4>
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
                <form action="{{ isset($service) ? route('admin.services.update', $service->id) : route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($service))
                        @method('PUT')
                    @endif
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Service Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ isset($service) ? $service->name : '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Short Description</label>
                        <textarea id="description" name="description" class="form-control">{{ isset($service) ? $service->description : '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="long_description" class="form-label">Long Description</label>
                        <textarea id="long_description" name="long_description" class="form-control">{{ isset($service) ? $service->long_description : '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" id="price" name="price" class="form-control" value="{{ isset($service) ? $service->price : '' }}" required min="0">
                    </div>

                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (in minutes)</label>
                        <input type="number" id="duration" name="duration" class="form-control" value="{{ isset($service) ? $service->duration : '' }}" min="1">
                    </div>

                    <div class="mb-3">
                        <label for="icon" class="form-label">Service Icon</label>
                        <input type="file" id="icon" name="icon" class="form-control">
                        @if(isset($service) && $service->icon)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$service->icon) }}" alt="Service Icon" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">{{ isset($service) ? 'Update Service' : 'Create Service' }}</button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid">

    <form method="GET" action="{{ route('admin.services.index') }}" class="row mb-4">
        <div class="col-md-3">
            <input type="text" name="name" class="form-control" placeholder="Search by name..." value="{{ request('name') }}">
        </div>
        <div class="col-md-2">
            <button class="btn" style="background-color: #FF5B2E; color: white;">Filter</button>
            <a href="{{ route('admin.services.index') }}" class="btn" style="background-color: #FF5B2E;color:white">
                Reset
            </a>
        </div>
    </form>

    <div class="mb-4">
        <a href="{{ route('admin.services.create') }}" class="btn btn-lg" style="background-color: #FF5B2E; color: white;">
            <i class="fas fa-plus-circle"></i> Add Service
        </a>
    </div>

    <div class="row" id="serviceList">
        @if($services->isEmpty())
            <div class="col-12 text-center">
                <p>No services found</p>
            </div>
        @else
            @foreach($services as $service)
                <div class="col-xl-3 col-md-4 col-sm-6 mb-4 service-card" data-name="{{ strtolower($service->name) }}">
                    <div class="card shadow h-100 py-3">
                        <div class="card-body text-center">
                            <img src="{{ $service->icon ? asset('storage/'.$service->icon) : asset('assets/images/Default.png') }}" 
                                 class="rounded-circle mb-3" style="width: 100px; height: 100px;" alt="Service Icon">

                            <h5 class="card-title">{{ $service->name }}</h5>
                            <p class="card-text text-muted">{{ $service->description ?? 'No Description' }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ $service->price }}</p>
                            <p class="card-text"><strong>Duration:</strong> {{ $service->duration }} minutes</p>

                            <div class="d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-info btn-sm mx-2" data-bs-toggle="modal" data-bs-target="#serviceModal-{{ $service->id }}">
                                    <i class="fas fa-eye"></i> View
                                </button>

                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning btn-sm mx-2">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="d-inline-block" id="deleteForm-{{ $service->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm mx-2 delete-btn" data-id="{{ $service->id }}">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

             
<div class="modal fade" id="serviceModal-{{ $service->id }}" tabindex="-1" aria-labelledby="serviceModalLabel-{{ $service->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel-{{ $service->id }}" style="color: #FF5B2E;">Service Details - {{ $service->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Icon:</strong></p>
                <img src="{{ $service->icon ? asset('storage/'.$service->icon) : asset('assets/images/Default.png') }}" class="rounded-circle" style="width: 100px; height: 100px;" alt="Service Icon">
                
                <p><strong>Name:</strong> {{ $service->name }}</p>
                <p><strong>Description:</strong> {{ $service->description ?? 'No Description' }}</p>
                <p><strong>Long Description:</strong> {{ $service->long_description ?? 'No Details' }}</p>
                <p><strong>Price:</strong> ${{ $service->price }}</p>
                <p><strong>Duration:</strong> {{ $service->duration }} minutes</p>

                <p>Employees Responsible:</p>
                <ul>
                    @forelse($service->employees as $employee)
                        <li>{{ $employee->name }} - {{ $employee->employee->job_title }}</li>
                    @empty
                        <li>No employees assigned to this service.</li>
                    @endforelse
                </ul>
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
            {{ $services->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

<script>
   document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function () {
            let serviceId = this.getAttribute("data-id");

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
                    document.getElementById("deleteForm-" + serviceId).submit();
                }
            });
        });
    });
});
</script>

@endsection

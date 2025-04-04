@extends('layouts.Admin-layout')

@section('content')

<div class="container-fluid">

    <form method="GET" action="{{ route('admin.appointments.index') }}" class="row mb-4">
        <div class="col-md-3">
            <input type="text" name="name" class="form-control" placeholder="Search by user name..." value="{{ request('name') }}">
        </div>
        <div class="col-md-3">
            <input type="date" name="date" class="form-control" value="{{ request('date') }}">
        </div>
        <div class="col-md-3">
            <select name="service" class="form-control">
                <option value="">All Services</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ request('service') == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn" style="background-color: #FF5B2E; color: white;">Filter</button>
            <a href="{{ route('admin.appointments.index') }}" class="btn" style="background-color: #FF5B2E;color:white">
                Reset
            </a>
        </div>
    </form>

    <div class="mb-4">
       <h1>Users Appointments</h1> 
    </div>

    <div class="row" id="appointmentList">
        @if($appointments->isEmpty())
            <div class="col-12 text-center">
                <p>No appointments found</p>
            </div>
        @else
            @foreach($appointments as $appointment)
                <div class="col-xl-3 col-md-4 col-sm-6 mb-4 appointment-card" data-name="{{ strtolower($appointment->user->name) }}">
                    <div class="card shadow h-100 py-3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Appointment for {{ $appointment->user->name }}</h5>
                            <p class="card-text"><strong>Service:</strong> {{ $appointment->service->name }}</p>
                            <p class="card-text"><strong>Pet:</strong> {{ $appointment->pet->name }}</p>
                            <p class="card-text"><strong>Start Time:</strong> {{ $appointment->start_time }}</p>
                            <p class="card-text"><strong>Status:</strong> {{ $appointment->status }}</p>

                            <div class="d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-info btn-sm mx-2" data-bs-toggle="modal" data-bs-target="#appointmentModal-{{ $appointment->id }}">
                                    <i class="fas fa-eye"></i> View
                                </button>

                                <a href="{{ route('admin.appointments.edit', $appointment->id) }}" class="btn btn-warning btn-sm mx-2">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST" class="d-inline-block" id="deleteForm-{{ $appointment->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm mx-2 delete-btn" data-id="{{ $appointment->id }}">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="appointmentModal-{{ $appointment->id }}" tabindex="-1" aria-labelledby="appointmentModalLabel-{{ $appointment->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="appointmentModalLabel-{{ $appointment->id }}" style="color: #FF5B2E;">Appointment Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <p><strong>User:</strong> {{ $appointment->user->name }}</p>
                                <p><strong>Pet:</strong> {{ $appointment->pet->name }}</p>
                                @if($appointment->pet->image)
                                    <img src="{{ asset('storage/' . $appointment->pet->image) }}" class="img-fluid" style="max-height: 150px; width: auto;" alt="{{ $appointment->pet->name }}">
                                @endif
                                <p><strong>Service:</strong> {{ $appointment->service->name }}</p>
                                <p><strong>Start Time:</strong> {{ $appointment->start_time }}</p>
                                <p><strong>Status:</strong> {{ $appointment->status }}</p>
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
            {{ $appointments->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

<script>
   document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function () {
            let appointmentId = this.getAttribute("data-id");

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
                    document.getElementById("deleteForm-" + appointmentId).submit();
                }
            });
        });
    });
});
</script>

@endsection

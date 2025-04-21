@extends('layouts.User-layout')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            @if(session('success'))
                <div class="alert alert alert-dismissible fade show mb-4" role="alert" style="background-color: #ff5b2e; color: white;">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card border-0 rounded-3 shadow-sm">
                <div class="card-header text-white py-3 rounded-top-3" style="background-color:#ff5b2e ;">
                    <h4 class="mb-0 fw-semibold"><i class="fas fa-calendar-check me-2"></i>Appointment Detail({{ $appointment->id }})</h4>
                </div>
                <div class="card-body p-4">
                    <div class="mb-4">
                        <h5 class=" mb-3 fw-semibold border-bottom pb-2" style="color:#ff5b2e">Service Information</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p class="mb-2"><strong><i class="fas fa-spa me-2 text-muted"></i>Service:</strong></p>
                                <p class="text-muted ps-4">{{ $appointment->service->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-2"><strong><i class="fas fa-clock me-2 text-muted"></i>Duration:</strong></p>
                                <p class="text-muted ps-4">{{ $appointment->service->duration }} minutes</p>
                            </div>
                        </div>
                        <p class="mb-2"><strong><i class="fas fa-align-left me-2 text-muted"></i>Description:</strong></p>
                        <p class="text-muted ps-4">{{ $appointment->service->description }}</p>
                    </div>

                    <div class="mb-4">
                        <h5 class=" mb-3 fw-semibold border-bottom pb-2" style="color:#ff5b2e">Pet Details</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-2"><strong><i class="fas fa-paw me-2 text-muted"></i>Pet Name:</strong></p>
                                <p class="text-muted ps-4">{{ $appointment->pet->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-2"><strong><i class="fas fa-tags me-2 text-muted"></i>Category:</strong></p>
                                <p class="text-muted ps-4">{{ $appointment->category->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class=" mb-3 fw-semibold border-bottom pb-2" style="color:#ff5b2e">Appointment Information</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p class="mb-2"><strong><i class="fas fa-calendar-day me-2 text-muted"></i>Date & Time:</strong></p>
                                <p class="text-muted ps-4">{{ \Carbon\Carbon::parse($appointment->start_time)->format('F j, Y \a\t h:i A') }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-2"><strong><i class="fas fa-dollar-sign me-2 text-muted"></i>Price:</strong></p>
                                <p class="text-muted ps-4">${{ number_format($appointment->category->price, 2) }}</p>
                            </div>
                        </div>
                        <p class="mb-2"><strong><i class="fas fa-info-circle me-2 text-muted"></i>Status:</strong></p>
                        <p class="ps-4">
                            <span class="badge rounded-pill py-2 px-3 
                                {{ $appointment->status === 'Pending' ? 'bg-warning text-dark' : 
                                   ($appointment->status === 'completed' ? 'bg-success' : 'bg-secondary')}}">
                                {{ $appointment->status }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
            <a href="{{ route('appointment.booking.page', ['service_id' => $appointment->service->id]) }}" class="btn btn-outline px-4 rounded-pill" style="color:#ff5b2e">
    <i class="fas fa-arrow-left me-2"></i>Back to {{ $appointment->service->name }}
</a>
<a href="{{ route('appointment.download.pdf', ['id' => $appointment->id]) }}" class="btn btn-outline px-4 rounded-pill" style="color:#ff5b2e">
    <i class="fas fa-download me-2"></i>Download PDF
</a>


            </div>
        </div>
    </div>
</div>
@endsection
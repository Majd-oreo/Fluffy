@extends('layouts.Admin-layout')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a> -->
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">${{ number_format($totalEarnings, 2) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Employees Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Employees
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalEmployees }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Users
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalUsers }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pets Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pets
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalPets }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-paw fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $totalAppointments }} Appointments</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Canceled <span class="float-right percentage" data-value="{{ $canceledPercentage }}"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" data-width="{{ $canceledPercentage }}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Pending <span class="float-right percentage" data-value="{{ $pendingPercentage }}"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" data-width="{{ $pendingPercentage }}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Completed <span class="float-right percentage" data-value="{{ $completedPercentage }}"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" data-width="{{ $completedPercentage }}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pets</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Cats <span class="float-right percentage" data-value="{{ $catsPercentage }}"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" data-width="{{ $catsPercentage }}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Dogs <span class="float-right percentage" data-value="{{ $dogsPercentage }}"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" data-width="{{ $dogsPercentage }}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Rabbits <span class="float-right percentage" data-value="{{ $rabbitsPercentage }}"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary" role="progressbar" data-width="{{ $rabbitsPercentage }}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Birds <span class="float-right percentage" data-value="{{ $birdsPercentage }}"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" data-width="{{ $birdsPercentage }}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- End of Main Content -->

<!-- Footer -->
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Fill in text percentages
        document.querySelectorAll('.percentage').forEach(span => {
            const value = parseFloat(span.dataset.value);
            span.textContent = `${value.toFixed(1)}%`;
        });

        // Set progress bar widths
        document.querySelectorAll('.progress-bar').forEach(bar => {
            const width = parseFloat(bar.dataset.width);
            if (!isNaN(width)) {
                bar.style.width = `${width}%`;
                bar.setAttribute('aria-valuenow', width);
            }
        });
    });
</script>

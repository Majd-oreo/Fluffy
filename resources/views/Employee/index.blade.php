@extends('layouts.Employee-layout')

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a>
    </div>

    <!-- Dashboard Cards -->
    <div class="row">
        <!-- Salary Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Salary (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($salary, 2) }} JD</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Appointments Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Appointments</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalAppointments }} appointments related to your services</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Days of Work Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Days of Work</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $workingDays }} days since start</div>
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
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pets</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($totalPets) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-paw fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="row">
        <!-- Appointments Progress -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $totalAppointments }} Appointments Summary</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Canceled <span class="float-right">{{ number_format($canceledPercentage, 1) }}%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $canceledPercentage }}%" aria-valuenow="{{ $canceledPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Pending <span class="float-right">{{ number_format($pendingPercentage, 1) }}%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $pendingPercentage }}%" aria-valuenow="{{ $pendingPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Completed <span class="float-right">{{ number_format($completedPercentage, 1) }}%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $completedPercentage }}%" aria-valuenow="{{ $completedPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pets Progress -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pet Types</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Cats <span class="float-right">{{ number_format($catsPercentage, 1) }}%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $catsPercentage }}%" aria-valuenow="{{ $catsPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Dogs <span class="float-right">{{ number_format($dogsPercentage, 1) }}%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $dogsPercentage }}%" aria-valuenow="{{ $dogsPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Rabbits <span class="float-right">{{ number_format($rabbitsPercentage, 1) }}%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $rabbitsPercentage }}%" aria-valuenow="{{ $rabbitsPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Birds <span class="float-right">{{ number_format($birdsPercentage, 1) }}%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $birdsPercentage }}%" aria-valuenow="{{ $birdsPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.Employee-layout')

@section('content')
<style>
    /* Custom styling for the table */
.table th, .table td {
    text-align: center;
}
.table .badge {
    font-size: 0.9rem;
}

</style>
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
                    <h4 class="small font-weight-bold">Canceled <span class="float-right canceled-text"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger canceled-bar" role="progressbar" style="width: 0%" data-value="{{ $canceledPercentage }}"></div>
                    </div>

                    <h4 class="small font-weight-bold">Pending <span class="float-right pending-text"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning pending-bar" role="progressbar" style="width: 0%" data-value="{{ $pendingPercentage }}"></div>
                    </div>

                    <h4 class="small font-weight-bold">Completed <span class="float-right completed-text"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success completed-bar" role="progressbar" style="width: 0%" data-value="{{ $completedPercentage }}"></div>
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
                    <h4 class="small font-weight-bold">Cats <span class="float-right cats-text"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger cats-bar" role="progressbar" style="width: 0%" data-value="{{ $catsPercentage }}"></div>
                    </div>

                    <h4 class="small font-weight-bold">Dogs <span class="float-right dogs-text"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning dogs-bar" role="progressbar" style="width: 0%" data-value="{{ $dogsPercentage }}"></div>
                    </div>

                    <h4 class="small font-weight-bold">Rabbits <span class="float-right rabbits-text"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary rabbits-bar" role="progressbar" style="width: 0%" data-value="{{ $rabbitsPercentage }}"></div>
                    </div>

                    <h4 class="small font-weight-bold">Birds <span class="float-right birds-text"></span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success birds-bar" role="progressbar" style="width: 0%" data-value="{{ $birdsPercentage }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <!-- Appointments for Today Table -->
    <div class="col-lg-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Today's Appointments</h6>
            </div>
            <div class="card-body">
                @if ($appointments->isEmpty())
                    <p>No appointments for today.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Appointment ID</th>
                                <th>Pet Name</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Time</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->id }}</td>
                                    <td>{{ $appointment->pet->name }}</td>
                                    <td>{{ $appointment->service->name }}</td>
                                    <td>
                                        <span class="badge 
                                            @if($appointment->status == 'Canceled') badge-danger
                                            @elseif($appointment->status == 'Pending') badge-warning
                                            @elseif($appointment->status == 'Completed') badge-success
                                            @endif
                                        ">
                                            {{ $appointment->status }}
                                        </span>
                                    </td>
                                    <td>{{ $appointment->start_time->format('H:i A') }}</td>
                                    <td>
                                        <!-- Add any action buttons if needed -->
                                        {{ $appointment->category->name }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>

</div>

<!-- JavaScript to update progress bars -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        function animateBars(className) {
            const bars = document.querySelectorAll(`.${className}-bar`);
            const texts = document.querySelectorAll(`.${className}-text`);

            bars.forEach((bar, index) => {
                const value = parseFloat(bar.getAttribute('data-value')).toFixed(1);
                bar.style.width = value + '%';
                bar.setAttribute('aria-valuenow', value);
                if (texts[index]) {
                    texts[index].innerText = `${value}%`;
                }
            });
        }

        animateBars('canceled');
        animateBars('pending');
        animateBars('completed');
        animateBars('cats');
        animateBars('dogs');
        animateBars('rabbits');
        animateBars('birds');
    });
</script>
@endsection

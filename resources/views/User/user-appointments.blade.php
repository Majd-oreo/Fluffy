<style>
    /* Global Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        color: #333;
    }

    /* Service card styles */
    .appointment-card {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
        height: 100%;
    }

    .appointment-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .appointment-header {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
    }

    .appointment-body p {
        margin: 10px 0;
    }

    .appointment-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 15px;
    }

    .appointment-footer a {
        cursor: pointer;
        margin-left: 10px;
    }

    /* Modal styles */
    .modal-footer {
        border-top: 1px solid #ddd;
        padding: 15px;
    }

    .btn-secondary {
        background-color: #6c757d;
    }

    /* Status styles */
    .status {
        font-weight: bold;
        text-transform: capitalize;
        display: inline-block;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .status-pending {
        background-color: #fff3cd;
        color: #856404;
    }

    .status-canceled {
        background-color: #f8d7da;
        color: #721c24;
    }

    .status-completed {
        background-color: #d4edda;
        color: #155724;
    }

    /* Filters section */
    .user-appointments-filter {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .user-appointments-filter label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    .user-appointments-filter select, 
    .user-appointments-filter input {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 1rem;
    }

    .user-appointments-filter input[type="submit"] {
        background-color: #ff5b2e;
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px 15px;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .user-appointments-filter input[type="submit"]:hover {
        background-color: #e04a1c;
    }

    /* Hero section */
    .petnest-about-us {
        background-color: #fff;
        padding: 60px 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .about-petnest-left h5 {
        color: #ff5b2e;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .about-petnest-left h1 {
        color: #333;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .about-petnest-left p {
        font-size: 1.1rem;
        color: #555;
    }

    .about-petnest-right figure img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    /* Newsletter section */
    .petnest-newsletter {
        background-color: #f1f1f1;
        padding: 40px 0;
    }

    .petnest-news-form h2 {
        font-size: 2rem;
        margin-bottom: 20px;
        text-align: center;
        color: #333;
    }

    .petnest-news-form form {
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .petnest-news-form form input[type="email"] {
        width: 70%;
        padding: 15px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 1rem;
    }

    .petnest-news-form form input[type="submit"] {
        background-color: #ff5b2e;
        color: white;
        border: none;
        cursor: pointer;
        padding: 15px 20px;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .petnest-news-form form input[type="submit"]:hover {
        background-color: #e04a1c;
    }

    /* Pagination styles */
    .pagination {
        justify-content: center;
        margin-top: 30px;
    }

    .pagination .page-link {
        color: #ff5b2e;
        border: 1px solid #ddd;
    }

    .pagination .page-link:hover {
        background-color: #ff5b2e;
        color: white;
    }

    .pagination .page-item.active .page-link {
        background-color: #ff5b2e;
        border-color: #ff5b2e;
        color: white;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .petnest-news-form form input[type="email"] {
            width: 100%;
        }
        
        .about-petnest-left h1 {
            font-size: 2rem;
        }
    }
  
    /* Appointment Cards Styles */
    .appointment-card {
        background-color: #fff;
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        padding: 25px;
        margin-bottom: 25px;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .appointment-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .appointment-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background-color: #ff5b2e;
    }

    .appointment-header {
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
    }

    .appointment-header h3 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
    }

    .appointment-header h6 {
        color: #777;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .appointment-body {
        margin-bottom: 20px;
    }

    .appointment-body p {
        margin: 8px 0;
        font-size: 0.95rem;
        display: flex;
        justify-content: space-between;
    }

    .appointment-body strong {
        color: #555;
        font-weight: 600;
        margin-right: 10px;
    }

    .appointment-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #f0f0f0;
    }

    .status {
        font-weight: 600;
        text-transform: capitalize;
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
    }

    .status-pending {
        background-color: #fff3cd;
        color: #856404;
    }

    .status-canceled {
        background-color: #f8d7da;
        color: #721c24;
    }

    .status-completed {
        background-color: #d4edda;
        color: #155724;
    }

    .appointment-actions {
        display: flex;
        gap: 12px;
    }

    .appointment-actions a {
        color: #777;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    .appointment-actions a:hover {
        color: #ff5b2e;
        transform: scale(1.1);
    }

    /* Modal Styles */
    .modal-content {
        border-radius: 12px;
        border: none;
    }

    .modal-header {
        border-bottom: 1px solid #f0f0f0;
        padding: 20px;
    }

    .modal-title {
        font-weight: 700;
        color: #333;
    }

    .modal-body {
        padding: 20px;
    }

    .modal-body p {
        margin-bottom: 12px;
        display: flex;
        justify-content: space-between;
    }

    .modal-body strong {
        color: #555;
        font-weight: 600;
    }

    .modal-footer {
        border-top: 1px solid #f0f0f0;
        padding: 15px 20px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .appointment-card {
            padding: 20px;
        }
        
        .appointment-header h3 {
            font-size: 1.2rem;
        }
        
        .appointment-actions {
            gap: 15px;
        }
    }
</style>
</style>

@extends('layouts.User-layout')

@section('content')

    <!-- Our Appointments Hero Start -->
    <section class="petnest-about-us petnest-cart-abut">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-left">
                        <h5>Appointments</h5>
                        <h1>View Your Upcoming <br class="d-xl-block d-none">Appointments</h1>
                        <p>All your previous and upcoming appointments for pet care services</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/team/appointment.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Appointments Hero End -->

    <!-- Filters Form Start -->
    <section class="user-appointments-filter">
        <div class="container">
            <form action="{{ route('userappointment') }}" method="GET">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">All</option>
                            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }} >Pending</option>
                            <option value="canceled" {{ request('status') == 'canceled' ? 'selected' : '' }}>Canceled</option>
                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                        </select>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <label for="service">Service</label>
                        <input type="text" name="service" id="service" class="form-control" placeholder="Search by service" value="{{ request('service') }}">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <label for="pet">Pet</label>
                        <input type="text" name="pet" id="pet" class="form-control" placeholder="Search by pet" value="{{ request('pet') }}">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <label for="date">Appointment Date</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ request('date') }}">
                    </div>
                </div>
               
                <div class="text-center">
                    <input type="submit" value="Apply Filters" style="background-color: #ff5b2e;"></i>
                </div>
            </form>
        </div>
    </section>
    <!-- Filters Form End -->

  <!-- User Appointments Start -->
<section class="user-appointments">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Your Appointments</h2>
                
                @if($appointments->isEmpty())
                    <p>No appointments found.</p>
                @else
                    <div class="row">
                        @foreach($appointments as $appointment)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="appointment-card">
                                    <div class="appointment-header">
                                        <h3>{{ $appointment->service->name }}</h3>
                                        <h6 style="color: gray;">{{ $appointment->category->name }}<small>({{ $appointment->id }})</small></h6>

                                    </div>
                                    <div class="appointment-body">
                                        <p><strong>Pet:</strong> {{ $appointment->pet->name }}</p>
                                        <p><strong>Appointment Time:</strong> {{ $appointment->start_time }}</p>

                                        
                                    </div>
                                    <div class="appointment-footer">
                                        <p><strong>Status:</strong> 
                                            <span class="status 
                                                @if($appointment->status == 'pending') status-pending
                                                @elseif($appointment->status == 'canceled') status-canceled
                                                @elseif($appointment->status == 'completed') status-completed
                                                @endif">
                                                {{ ucfirst($appointment->status) }}
                                            </span>
                                        </p>
                                        <a  type="button"  data-bs-toggle="modal"data-bs-target="#modal-{{ $appointment->id }}"><i class="fa-solid fa-eye" style="color: #ff5b2e;"></i></a>
                                        @php
    $appointmentDate = \Carbon\Carbon::parse($appointment->start_time);
    $now = \Carbon\Carbon::now();
    
@endphp

@if($appointmentDate->diffInDays($now, false) < -2)

    <a type="button" class="delete-appointment" data-id="{{ $appointment->id }}">
        <i class="fa-solid fa-trash" style="color: #e7230d;"></i>
    </a>
   "2 Days"

    <form id="delete-form-{{ $appointment->id }}" action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endif

                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal-{{ $appointment->id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $appointment->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel-{{ $appointment->id }}">{{ $appointment->service->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <p><strong>Appointment ID:</strong> {{ $appointment->id }}</p>

                <p><strong>Pet:</strong> {{ $appointment->pet->name }}</p>
                    <p><strong>Appointment Time:</strong> {{ $appointment->start_time }}</p>
                    <p><strong>Price:</strong> {{ $appointment->category->price }}</p>
                    <p><strong>Duration:</strong> {{ $appointment->service->duration }} minutes</p>


                    <p><strong>Status:</strong> {{ ucfirst($appointment->status) }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       </div>
            </div>
        </div>
    </div>
                        @endforeach
                    </div>
                @endif
                
                <div class="text-center mt-4">
                    {{ $appointments->links('pagination::bootstrap-4') }}
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- User Appointments End -->


    <!-- Petnest Newsletter Start -->
    <section class="petnest-newsletter petnest-newsletter-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="petnest-news-form">
                        <h2>Subscribe Newsletter <br class="d-md-block d-none"> & get News</h2>
                        <form action="#">
                            <input type="email" placeholder="Enter your E-mail">
                            <input type="submit" value="Subscribe Now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Petnest Newsletter End -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".delete-Appointment").forEach(button => {
                button.addEventListener("click", function() {
                    let appointmentId = this.getAttribute("data-id");
                    
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#ff5b2e",
                        cancelButtonColor: "#6c757d",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById("delete-form-" + appointmentId).submit();
                        }
                    });
                });
            });
        });
    </script>
  
@endsection

<style>
    /* Global Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
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
        margin-top: 15px;
    }

    /* Status color styles */
    .status {
    font-weight: bold;
    text-transform: capitalize;
    display: inline-block;
    padding: 5px 10px;
    border-radius: 5px;
}

/* Status pending (green) */


/* Hover effects for status colors */
.status:hover {
    opacity: 0.8;
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

    .user-appointments-filter select, .user-appointments-filter input {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 1rem;
    }

    .user-appointments-filter input[type="submit"] {
        background-color: #3498db;
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px 15px;
        border-radius: 5px;
        font-weight: bold;
    }

    .user-appointments-filter input[type="submit"]:hover {
        background-color: #2980b9;
    }

    /* Hero section */
    .petnest-about-us {
        background-color: #fff;
        padding: 60px 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .petnest-about-us .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .about-petnest-left h5, .about-petnest-left h1 {
        color: #333;
    }

    .about-petnest-left p {
        font-size: 1.1rem;
        color: #555;
    }

    .about-petnest-right figure {
        max-width: 100%;
        height: auto;
    }

    /* Newsletter Section */
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

    .petnest-news-form form input[type="email"] {
        width: 70%;
        padding: 15px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 1rem;
    }

    .petnest-news-form form input[type="submit"] {
        background-color: #3498db;
        color: white;
        border: none;
        cursor: pointer;
        padding: 15px 20px;
        border-radius: 5px;
        font-weight: bold;
    }

    .petnest-news-form form input[type="submit"]:hover {
        background-color: #2980b9;
    }
    /* Pagination Styles */
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
                            <figure><img src="./assets/images/team/hero-team.png" alt=""></figure>
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
                <p><strong>Pet:</strong> {{ $appointment->pet->name }}</p>
                    <p><strong>Appointment Time:</strong> {{ $appointment->start_time }}</p>
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


  
@endsection

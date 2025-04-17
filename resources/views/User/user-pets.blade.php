<style>
    /* User Pets Section */
.user-pets .card {
    border: 1px solid #ddd;
    border-radius: 10px;
    margin-bottom: 30px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

.user-pets .card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
}

.user-pets .card-img-top {
    height: 200px;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.user-pets .card-body {
    padding: 20px;
}

.user-pets .card-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 15px;
}

.user-pets .card-text {
    font-size: 1rem;
    margin-bottom: 10px;
}

.user-pets .card-footer {
    background-color: #f9f9f9;
    padding: 10px 20px;
    text-align: center;
}

.user-pets .btn-info {
    color: white;
    background-color:  #ff5b2e;
    border: none;
    padding: 8px 15px;
    font-size: 1rem;
    text-decoration: none;
    border-radius: 5px;
}

.user-pets .btn-info:hover {
    background-color:rgb(241, 79, 34);
}

.modal-content {
    border-radius: 10px;
}

.modal-header {
    border-bottom: 1px solid #ddd;
}

.modal-footer {
    border-top: 1px solid #ddd;
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
</style>
@extends('layouts.User-layout')

@section('content')

    <!-- Pets Hero Section Start -->
    <section class="petnest-about-us petnest-cart-abut">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-left">
                        <h5>My Pets</h5>
                        <h1>View Your Pet's Details</h1>
                        <p>All your pets associated with your account</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-petnest-right-wrapper">
                        <div class="about-petnest-right">
                            <figure><img src="./assets/images/team/petall.png" alt="" ></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pets Hero Section End -->

    <!-- User Pets Start -->
    <section class="user-pets">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Your Pets</h1>
                    <br />
                    
                    <div class="text-end mb-3">
                    <a href="{{ route('pets.create') }}" class="btn" style="background-color: #ff5b2e; color: white;">
    <i class="fa-solid fa-plus"></i> Add New Pet
</a>

                    </div>

                    @if($pets->isEmpty())
                        <p>No pets found.</p>
                    @else
                        <div class="row">
                            @foreach($pets as $pet)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="card pet-card">
                                    <img src="{{ asset('storage/' . $pet->image) }}" class="card-img-top" alt="Pet Image">
                                    <div class="card-body">
                                            <h5 class="card-title">{{ $pet->name }}</h5>
                                            <p class="card-text"><strong>Type:</strong> {{ $pet->type }}</p>
                                            <p class="card-text"><strong>Breed:</strong> {{ $pet->breed }}</p>
                                            <p class="card-text"><strong>Age:</strong> {{ $pet->age }} years</p>
                                            <p class="card-text"><strong>Weight:</strong> {{ $pet->weight }} kg</p>
                                        </div>
                                        <div class="card-footer">
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#modal-{{ $pet->id }}" class="btn btn-info">View Details
                                            </a>
                                            <button type="button" class="btn btn-danger delete-pet" data-id="{{ $pet->id }}">Delete {{ $pet->name }}
                                            </button>
                                            
                                            <form id="delete-form-{{ $pet->id }}" action="{{ route('pets.destroy', $pet->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal for Pet Details -->
                                <div class="modal fade" id="modal-{{ $pet->id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $pet->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalLabel-{{ $pet->id }}">{{ $pet->name }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Medical History:</strong> {{ $pet->medical_history ?: 'Not provided' }}</p>
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
                        {{ $pets->links('pagination::bootstrap-4') }}
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- User Pets End -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".delete-pet").forEach(button => {
                button.addEventListener("click", function() {
                    let petId = this.getAttribute("data-id");
                    
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
                            document.getElementById("delete-form-" + petId).submit();
                        }
                    });
                });
            });
        });
    </script>

@endsection

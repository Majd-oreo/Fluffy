

@extends('layouts.employee-layout')

@section('content')

<div class="container-fluid">

    <form method="GET" action="{{ route('employee.pets.index') }}" class="row mb-4">
        <div class="col-md-3">
            <input type="text" name="name" class="form-control" placeholder="Search by name..." value="{{ request('name') }}">
        </div>
        <div class="col-md-3">
            <select name="type" class="form-control" onchange="this.form.submit()">
                <option value="">Filter by type</option>
                <option value="Cat" {{ request('type') == 'Cat' ? 'selected' : '' }}>Cat</option>
                <option value="Dog" {{ request('type') == 'Dog' ? 'selected' : '' }}>Dog</option>
                <option value="Bird" {{ request('type') == 'Bird' ? 'selected' : '' }}>Bird</option>
                <option value="Rabbit" {{ request('type') == 'Rabbit' ? 'selected' : '' }}>Rabbit</option>
            </select>
        </div>
        <div class="col-md-3">

    <select id="user_id" name="user_id" class="form-control">
        <option value="">Select Owner</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
        @endforeach
    </select>
</div>

        <div class="col-md-2">
            <button class="btn" style="background-color: #FF5B2E; color: white;">Filter</button>
            <a href="{{ route('employee.pets.index') }}" class="btn" style="background-color: #FF5B2E;color:white">
                Reset
            </a>
        </div>
      
    </form>

    <div class="mb-4">
        <a href="{{ route('employee.pets.create') }}" class="btn btn-lg" style="background-color: #FF5B2E; color: white;">
            <i class="fas fa-plus-circle"></i> Add Pet
        </a>
    </div>

    <div class="row" id="petList">
    @if($pets->isEmpty())
        <div class="col-12 text-center">
            <p>No pets found</p>
        </div>
    @else
        @foreach($pets as $pet)
            <div class="col-xl-3 col-md-4 col-sm-6 mb-4 pet-card" data-name="{{ strtolower($pet->name) }}" data-type="{{ strtolower($pet->type) }}">
                <div class="card shadow h-100 py-3">
                    <div class="card-body text-center">
                        <img src="{{ $pet->image ? asset('storage/'.$pet->image) : asset('assets/images/Default.png') }}" 
                             class="rounded-circle mb-3" style="width: 100px; height: 100px;" alt="Pet Image">

                        <h5 class="card-title">{{ $pet->name }}</h5>
                        <p class="card-text text-muted">{{ $pet->type }}</p>
                        <p class="card-text text-muted"><strong>Owner:</strong> {{ $pet->user->name }}</p>

                        <div class="d-flex justify-content-center align-items-center">
    <button type="button" class="btn btn-info btn-sm mx-2" data-bs-toggle="modal" data-bs-target="#petModal-{{ $pet->id }}">
        <i class="fas fa-eye"></i> View
    </button>

    <a href="{{ route('employee.pets.edit', $pet->id) }}" class="btn btn-warning btn-sm mx-2">
        <i class="fas fa-edit"></i> Edit
    </a>

    <form action="{{ route('employee.pets.destroy', $pet->id) }}" method="POST" class="d-inline-block" id="deleteForm-{{ $pet->id }}">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger btn-sm mx-2 delete-btn" data-id="{{ $pet->id }}">
            <i class="fas fa-trash-alt"></i> Delete
        </button>
    </form>
</div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="petModal-{{ $pet->id }}" tabindex="-1" aria-labelledby="petModalLabel-{{ $pet->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="petModalLabel-{{ $pet->id }}" style="color: #FF5B2E;">Pet Details - {{ $pet->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Image:</strong></p>
                            <img src="{{ $pet->image ? asset('storage/'.$pet->image) : asset('assets/images/Default.png') }}" class="rounded-circle" style="width: 100px; height: 100px;" alt="Pet Image">
                            
                            <p><strong>Name:</strong> {{ $pet->name }}</p>
                            <p><strong>Type:</strong> {{ $pet->type }}</p>
                            <p><strong>Breed:</strong> {{ $pet->breed ?? 'Not Available' }}</p>
                            <p><strong>Age:</strong> {{ $pet->age ?? 'Not Available' }}</p>
                            <p><strong>Weight:</strong> {{ $pet->weight ?? 'Not Available' }} kg</p>
                            <p><strong>Medical History:</strong> {{ $pet->medical_history ?? 'No Medical History' }}</p>
                            <p><strong>Owner:</strong> {{ $pet->user->name }}</p>
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
        {{ $pets->links('pagination::bootstrap-4') }}
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function () {
            let petId = this.getAttribute("data-id");

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
                    document.getElementById("deleteForm-" + petId).submit();
                }
            });
        });
    });
});

</script>

@endsection

@extends('layouts.employee-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>Edit Pet</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="petForm" action="{{ route('employee.pets.update', $pet->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    @method('PUT')  
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Pet Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $pet->name }}">
                        <small class="text-danger d-none" id="nameError">Pet name is required.</small>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Pet Type</label>
                        <select id="type" name="type" class="form-control">
                            <option value="">Select Pet Type</option>
                            <option value="Cat" {{ $pet->type == 'Cat' ? 'selected' : '' }}>Cat</option>
                            <option value="Dog" {{ $pet->type == 'Dog' ? 'selected' : '' }}>Dog</option>
                            <option value="Bird" {{ $pet->type == 'Bird' ? 'selected' : '' }}>Bird</option>
                            <option value="Rabbit" {{ $pet->type == 'Rabbit' ? 'selected' : '' }}>Rabbit</option>
                        </select>
                        <small class="text-danger d-none" id="typeError">Pet type is required.</small>
                    </div>

                    <div class="mb-3">
                        <label for="breed" class="form-label">Breed</label>
                        <input type="text" id="breed" name="breed" class="form-control" value="{{ $pet->breed }}">
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age (Years)</label>
                        <input type="number" id="age" name="age" class="form-control" value="{{ $pet->age }}">
                        <small class="text-danger d-none" id="ageError">Age must be 0 or greater.</small>
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight (kg)</label>
                        <input type="number" id="weight" name="weight" class="form-control" value="{{ $pet->weight }}">
                        <small class="text-danger d-none" id="weightError">Weight must be 0 or greater.</small>
                    </div>

                    <div class="mb-3">
                        <label for="medical_history" class="form-label">Medical History</label>
                        <textarea id="medical_history" name="medical_history" class="form-control">{{ $pet->medical_history }}</textarea>
                    </div>

                    <div class="mb-3">
                        <p for="user_id" class="form-label">Owner</p>
                        @if ($pet->user)
                            {{ $pet->user->name }}
                        @else
                            <span style="color: gray;">No owner assigned</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Pet Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                        @if($pet->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$pet->image) }}" alt="Pet Image" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">Update Pet</button>
                        <a href="{{ route('employee.pets.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        let valid = true;

        const name = document.getElementById('name').value.trim();
        const type = document.getElementById('type').value.trim();
        const age = document.getElementById('age').value;
        const weight = document.getElementById('weight').value;

        // Hide all errors first
        document.getElementById('nameError').classList.add('d-none');
        document.getElementById('typeError').classList.add('d-none');
        document.getElementById('ageError').classList.add('d-none');
        document.getElementById('weightError').classList.add('d-none');

        if (name === '') {
            document.getElementById('nameError').classList.remove('d-none');
            valid = false;
        }

        if (type === '') {
            document.getElementById('typeError').classList.remove('d-none');
            valid = false;
        }

        if (age < 0 || age === '') {
            document.getElementById('ageError').classList.remove('d-none');
            valid = false;
        }

        if (weight < 0 || weight === '') {
            document.getElementById('weightError').classList.remove('d-none');
            valid = false;
        }

        return valid;
    }
</script>
@endsection

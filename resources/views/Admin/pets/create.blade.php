@extends('layouts.Admin-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>{{ isset($pet) ? 'Edit Pet' : 'Create Pet' }}</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ isset($pet) ? route('admin.pets.update', $pet->id) : route('admin.pets.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($pet))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">Pet Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $pet->name ?? '') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Pet Type</label>
                        <select id="type" name="type" class="form-control @error('type') is-invalid @enderror" required>
                            <option value="">Select Pet Type</option>
                            <option value="Cat" {{ old('type', $pet->type ?? '') == 'Cat' ? 'selected' : '' }}>Cat</option>
                            <option value="Dog" {{ old('type', $pet->type ?? '') == 'Dog' ? 'selected' : '' }}>Dog</option>
                            <option value="Bird" {{ old('type', $pet->type ?? '') == 'Bird' ? 'selected' : '' }}>Bird</option>
                            <option value="Rabbit" {{ old('type', $pet->type ?? '') == 'Rabbit' ? 'selected' : '' }}>Rabbit</option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="breed" class="form-label">Breed</label>
                        <input type="text" id="breed" name="breed" class="form-control @error('breed') is-invalid @enderror" value="{{ old('breed', $pet->breed ?? '') }}">
                        @error('breed')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age (Years)</label>
                        <input type="number" id="age" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $pet->age ?? '') }}">
                        @error('age')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight (kg)</label>
                        <input type="number" id="weight" name="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ old('weight', $pet->weight ?? '') }}">
                        @error('weight')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="medical_history" class="form-label">Medical History</label>
                        <textarea id="medical_history" name="medical_history" class="form-control @error('medical_history') is-invalid @enderror">{{ old('medical_history', $pet->medical_history ?? '') }}</textarea>
                        @error('medical_history')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="user_id" class="form-label">Owner</label>
                        <select id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" required>
                            <option value="">Select Owner</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ old('user_id', $pet->user_id ?? '') == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Pet Image</label>
                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        @if(isset($pet) && $pet->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$pet->image) }}" alt="Pet Image" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">
                            {{ isset($pet) ? 'Update Pet' : 'Create Pet' }}
                        </button>
                        <a href="{{ route('admin.pets.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function validateForm() {
        let valid = true;

        // Clear all previous errors
        document.querySelectorAll('.form-control').forEach(field => {
            field.classList.remove('is-invalid');
        });

        const showError = (id, message) => {
            const field = document.getElementById(id);
            const feedback = field.nextElementSibling;
            if (feedback && feedback.classList.contains('invalid-feedback')) {
                feedback.textContent = message;
                field.classList.add('is-invalid');
            }
            valid = false;
        };

        const name = document.getElementById('name').value.trim();
        const type = document.getElementById('type').value;
        const age = document.getElementById('age').value;
        const weight = document.getElementById('weight').value;
        const user_id = document.getElementById('user_id').value;
        const imageInput = document.getElementById('image');
        const image = imageInput.files[0];

        if (!name) showError('name', "Please enter the pet's name.");
        if (!type) showError('type', "Please select a pet type.");
        if (!user_id) showError('user_id', "Please select an owner.");
        if (age && (isNaN(age) || age < 0)) showError('age', "Age must be a non-negative number.");
        if (weight && (isNaN(weight) || weight < 0)) showError('weight', "Weight must be a non-negative number.");

        if (image) {
            const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
            if (!allowedTypes.includes(image.type)) {
                showError('image', "Only JPG, JPEG, PNG, and GIF images are allowed.");
            } else if (image.size > 2 * 1024 * 1024) {
                showError('image', "Image size must be less than 2MB.");
            }
        }

        return valid;
    }
</script>

@endsection


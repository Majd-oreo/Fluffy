@extends('layouts.User-layout')

@section('content')
<section class="petnest-about-us petnest-cart-abut py-5">
    <div class="container" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-4 border-0">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Add New Pet</h2>

                        {{-- Display All Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pets.store') }}" method="POST" enctype="multipart/form-data" id="add-pet-form">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label">Pet Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="type" class="form-label">Pet Type</label>
                                <select name="type" id="type" class="form-select @error('type') is-invalid @enderror" required>
                                    <option value="">Select a type</option>
                                    <option value="Cat" {{ old('type') == 'Cat' ? 'selected' : '' }}>Cat</option>
                                    <option value="Dog" {{ old('type') == 'Dog' ? 'selected' : '' }}>Dog</option>
                                    <option value="Bird" {{ old('type') == 'Bird' ? 'selected' : '' }}>Bird</option>
                                    <option value="Rabbit" {{ old('type') == 'Rabbit' ? 'selected' : '' }}>Rabbit</option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="breed" class="form-label">Breed</label>
                                <input type="text" class="form-control @error('breed') is-invalid @enderror" id="breed" name="breed" value="{{ old('breed') }}" required>
                                @error('breed')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}" required>
                                @error('age')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="weight" class="form-label">Weight (kg)</label>
                                <input type="number" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{ old('weight') }}" required>
                                @error('weight')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="medical_history" class="form-label">Medical History</label>
                                <textarea class="form-control @error('medical_history') is-invalid @enderror" id="medical_history" name="medical_history" rows="3">{{ old('medical_history') }}</textarea>
                                @error('medical_history')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="image" class="form-label">Pet Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn rounded-pill" style="background-color: #ff5b2e; color: white;">Add Pet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Optional client-side JS validation --}}
<script>
    document.getElementById('add-pet-form').addEventListener('submit', function(e) {
        clearErrors();
        let isValid = true;

        const name = document.getElementById('name');
        if (name.value.trim() === '') {
            isValid = false;
            name.classList.add('is-invalid');
        }

        const type = document.getElementById('type');
        if (type.value === '') {
            isValid = false;
            type.classList.add('is-invalid');
        }

        const breed = document.getElementById('breed');
        if (breed.value.trim() === '') {
            isValid = false;
            breed.classList.add('is-invalid');
        }

        const age = document.getElementById('age');
        if (age.value.trim() === '' || isNaN(age.value) || age.value <= 0) {
            isValid = false;
            age.classList.add('is-invalid');
        }

        const weight = document.getElementById('weight');
        if (weight.value.trim() === '' || isNaN(weight.value) || weight.value <= 0) {
            isValid = false;
            weight.classList.add('is-invalid');
        }

        const image = document.getElementById('image');
        if (image.files.length > 0) {
            const file = image.files[0];
            const ext = file.name.split('.').pop().toLowerCase();
            if (!['jpg', 'jpeg', 'png'].includes(ext)) {
                isValid = false;
                image.classList.add('is-invalid');
            }
        }

        if (!isValid) {
            e.preventDefault();
        }
    });

    function clearErrors() {
        document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
    }
</script>
@endsection

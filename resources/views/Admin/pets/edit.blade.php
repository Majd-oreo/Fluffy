@extends('layouts.Admin-layout')

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

                <div id="clientErrors" class="alert alert-danger d-none">
                    <ul id="clientErrorList"></ul>
                </div>

                <form action="{{ route('admin.pets.update', $pet->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    @method('PUT')  
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Pet Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $pet->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Pet Type</label>
                        <select id="type" name="type" class="form-control" required>
                            <option value="">Select Pet Type</option>
                            <option value="Cat" {{ $pet->type == 'Cat' ? 'selected' : '' }}>Cat</option>
                            <option value="Dog" {{ $pet->type == 'Dog' ? 'selected' : '' }}>Dog</option>
                            <option value="Bird" {{ $pet->type == 'Bird' ? 'selected' : '' }}>Bird</option>
                            <option value="Rabbit" {{ $pet->type == 'Rabbit' ? 'selected' : '' }}>Rabbit</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="breed" class="form-label">Breed</label>
                        <input type="text" id="breed" name="breed" class="form-control" value="{{ $pet->breed }}">
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age (Years)</label>
                        <input type="number" id="age" name="age" class="form-control" value="{{ $pet->age }}">
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight (kg)</label>
                        <input type="number" id="weight" name="weight" class="form-control" value="{{ $pet->weight }}">
                    </div>

                    <div class="mb-3">
                        <label for="medical_history" class="form-label">Medical History</label>
                        <textarea id="medical_history" name="medical_history" class="form-control">{{ $pet->medical_history }}</textarea>
                    </div>

                    <div class="mb-3">
                        <p for="user_id" class="form-label">User</p>
                        @if ($pet->user)
                            {{ $pet->user->name }}
                        @else
                            <span style="color: gray;">Deleted User</span>
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
                        <a href="{{ route('admin.pets.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        const name = document.getElementById('name').value.trim();
        const type = document.getElementById('type').value.trim();
        const age = document.getElementById('age').value.trim();
        const weight = document.getElementById('weight').value.trim();
        const image = document.getElementById('image').value;

        const errorBox = document.getElementById('clientErrors');
        const errorList = document.getElementById('clientErrorList');
        errorList.innerHTML = '';
        errorBox.classList.add('d-none');

        let errors = [];

        if (name === '') errors.push("Pet name is required.");
        if (type === '') errors.push("Pet type is required.");
        if (age !== '' && (isNaN(age) || parseInt(age) < 0)) errors.push("Age must be a non-negative number.");
        if (weight !== '' && (isNaN(weight) || parseFloat(weight) < 0)) errors.push("Weight must be a non-negative number.");

        if (image) {
            const allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            const fileExtension = image.split('.').pop().toLowerCase();
            const fileSize = document.getElementById('image').files[0].size;

            if (!allowedExtensions.includes(fileExtension)) {
                errors.push("Only JPG, JPEG, PNG, and GIF files are allowed.");
            }

            if (fileSize > 2 * 1024 * 1024) {
                errors.push("Image size should not exceed 2MB.");
            }
        }

        if (errors.length > 0) {
            errors.forEach(function(error) {
                const li = document.createElement('li');
                li.textContent = error;
                errorList.appendChild(li);
            });
            errorBox.classList.remove('d-none');
            return false;
        }

        return true;
    }
</script>

@endsection

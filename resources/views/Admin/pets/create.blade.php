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
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ isset($pet) ? route('admin.pets.update', $pet->id) : route('admin.pets.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    @if(isset($pet))
                        @method('PUT')
                    @endif
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Pet Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ isset($pet) ? $pet->name : '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Pet Type</label>
                        <select id="type" name="type" class="form-control" required>
                            <option value="">Select Pet Type</option>
                            <option value="Cat" {{ isset($pet) && $pet->type == 'Cat' ? 'selected' : '' }}>Cat</option>
                            <option value="Dog" {{ isset($pet) && $pet->type == 'Dog' ? 'selected' : '' }}>Dog</option>
                            <option value="Bird" {{ isset($pet) && $pet->type == 'Bird' ? 'selected' : '' }}>Bird</option>
                            <option value="Rabbit" {{ isset($pet) && $pet->type == 'Rabbit' ? 'selected' : '' }}>Rabbit</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="breed" class="form-label">Breed</label>
                        <input type="text" id="breed" name="breed" class="form-control" value="{{ isset($pet) ? $pet->breed : '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age (Years)</label>
                        <input type="number" id="age" name="age" class="form-control" value="{{ isset($pet) ? $pet->age : '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight (kg)</label>
                        <input type="number" id="weight" name="weight" class="form-control" value="{{ isset($pet) ? $pet->weight : '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="medical_history" class="form-label">Medical History</label>
                        <textarea id="medical_history" name="medical_history" class="form-control">{{ isset($pet) ? $pet->medical_history : '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="user_id" class="form-label">Owner</label>
                        <select id="user_id" name="user_id" class="form-control" required>
                            <option value="">Select Owner</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ isset($pet) && $pet->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Pet Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                        @if(isset($pet) && $pet->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$pet->image) }}" alt="Pet Image" class="rounded" style="width: 100px; height: 100px;">
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">{{ isset($pet) ? 'Update Pet' : 'Create Pet' }}</button>
                        <a href="{{ route('admin.pets.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        let name = document.getElementById('name').value.trim();
        return true;
    }
</script>
@endsection

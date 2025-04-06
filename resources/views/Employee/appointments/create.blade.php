@extends('layouts.employee-layout')

@section('content')
<div class="container-fluid d-flex justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow" style="border: 2px solid #FF5B2E; background-color: white;">
            <div class="card-header text-white text-center" style="background-color: #FF5B2E;">
                <h4>Create New Appointment</h4>
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

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('employee.appointments.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
        <label for="user_id" class="form-label">User</label>
        <select id="user_id" name="user_id" class="form-control" onchange="this.form.submit()" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="pet_id" class="form-label">Pet</label>
        <select id="pet_id" name="pet_id" class="form-control" required>
            <option value="">Select Pet</option>
            @foreach($pets as $pet)
                <option value="{{ $pet->id }}" {{ old('pet_id') == $pet->id ? 'selected' : '' }}>{{ $pet->name }}</option>
            @endforeach
        </select>
    </div>

                    <div class="mb-3">
                        <label for="service_id" class="form-label">Service</label>
                        <select id="service_id" name="service_id" class="form-control" required>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select id="category_id" name="category_id" class="form-control">
                            <option value="">None</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="start_time" class="form-label">Start Time</label>
                        <input type="datetime-local" id="start_time" name="start_time" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select id="status" name="status" class="form-control" required>
                            <option value="Pending">Pending</option>
                            <option value="Completed">Completed</option>
                            <option value="Canceled">Canceled</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white btn-lg" style="background-color: #FF5B2E; padding: 12px 24px; font-size: 18px;">Create Appointment</button>
                        <a href="{{ route('employee.appointments.index') }}" class="btn btn-secondary btn-lg" style="padding: 12px 24px; font-size: 18px;">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

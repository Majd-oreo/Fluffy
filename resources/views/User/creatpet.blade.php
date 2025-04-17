@extends('layouts.User-layout')

@section('content')
<section class="petnest-about-us petnest-cart-abut py-5">
    <div class="container" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-4 border-0">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Add New Pet</h2>
                        <form action="{{ route('pets.store') }}" method="POST" enctype="multipart/form-data" id="add-pet-form">
                            @csrf
                            
                            <div class="mb-4">
                                <label for="name" class="form-label">Pet Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <span id="name-error" class="text-danger d-none">This field is required.</span>
                            </div>

                            <div class="mb-4">
                                <label for="type" class="form-label">Pet Type</label>
                                <select name="type" id="type" class="form-select" required>
                                    <option value="">Select a type</option>
                                    <option value="Cat" {{ old('type', $pet->type ?? '') == 'Cat' ? 'selected' : '' }}>Cat</option>
                                    <option value="Dog" {{ old('type', $pet->type ?? '') == 'Dog' ? 'selected' : '' }}>Dog</option>
                                    <option value="Bird" {{ old('type', $pet->type ?? '') == 'Bird' ? 'selected' : '' }}>Bird</option>
                                    <option value="Rabbit" {{ old('type', $pet->type ?? '') == 'Rabbit' ? 'selected' : '' }}>Rabbit</option>
                                </select>
                                <span id="type-error" class="text-danger d-none">This field is required.</span>
                            </div>

                            <div class="mb-4">
                                <label for="breed" class="form-label">Breed</label>
                                <input type="text" class="form-control" id="breed" name="breed" required>
                                <span id="breed-error" class="text-danger d-none">This field is required.</span>
                            </div>

                            <div class="mb-4">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                                <span id="age-error" class="text-danger d-none">This field is required and must be a valid number.</span>
                            </div>

                            <div class="mb-4">
                                <label for="weight" class="form-label">Weight (kg)</label>
                                <input type="number" class="form-control" id="weight" name="weight" required>
                                <span id="weight-error" class="text-danger d-none">This field is required and must be a valid number.</span>
                            </div>

                            <div class="mb-4">
                                <label for="medical_history" class="form-label">Medical History</label>
                                <textarea class="form-control" id="medical_history" name="medical_history" rows="3"></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="image" class="form-label">Pet Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <span id="image-error" class="text-danger d-none">Please upload a valid image (JPG, JPEG, PNG).</span>
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

    <script>
        document.getElementById('add-pet-form').addEventListener('submit', function(e) {
            // Clear previous error messages
            clearErrors();

            let isValid = true;

            // Validate Pet Name
            const name = document.getElementById('name');
            if (name.value.trim() === '') {
                isValid = false;
                document.getElementById('name-error').style.display = 'inline';
            }

            // Validate Pet Type
            const type = document.getElementById('type');
            if (type.value === '') {
                isValid = false;
                document.getElementById('type-error').style.display = 'inline';
            }

            // Validate Breed
            const breed = document.getElementById('breed');
            if (breed.value.trim() === '') {
                isValid = false;
                document.getElementById('breed-error').style.display = 'inline';
            }

            // Validate Age
            const age = document.getElementById('age');
            if (age.value.trim() === '' || isNaN(age.value) || age.value <= 0) {
                isValid = false;
                document.getElementById('age-error').style.display = 'inline';
            }

            // Validate Weight
            const weight = document.getElementById('weight');
            if (weight.value.trim() === '' || isNaN(weight.value) || weight.value <= 0) {
                isValid = false;
                document.getElementById('weight-error').style.display = 'inline';
            }

            // Validate Image
            const image = document.getElementById('image');
            if (image.files.length > 0) {
                const file = image.files[0];
                const fileExtension = file.name.split('.').pop().toLowerCase();
                if (!['jpg', 'jpeg', 'png'].includes(fileExtension)) {
                    isValid = false;
                    document.getElementById('image-error').style.display = 'inline';
                }
            }

            // Prevent form submission if validation fails
            if (!isValid) {
                e.preventDefault();
            }
        });

        function clearErrors() {
            // Hide all error messages
            document.getElementById('name-error').style.display = 'none';
            document.getElementById('type-error').style.display = 'none';
            document.getElementById('breed-error').style.display = 'none';
            document.getElementById('age-error').style.display = 'none';
            document.getElementById('weight-error').style.display = 'none';
            document.getElementById('image-error').style.display = 'none';
        }
    </script>
@endsection

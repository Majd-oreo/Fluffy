<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { padding: 20px; }
        h1 { color: #ff5b2e; }
        .info { margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Appointment Details</h1>
        <p class="info"><strong>Service:</strong> {{ $appointment->service->name }}</p>
        <p class="info"><strong>Pet:</strong> {{ $appointment->pet->name }}</p>
        <p class="info"><strong>Category:</strong> {{ $appointment->category->name }}</p>
        <p class="info"><strong>Appointment Time:</strong> {{ $appointment->start_time }}</p>
        <p class="info"><strong>Status:</strong> {{ ucfirst($appointment->status) }}</p>
    </div>
</body>
</html>

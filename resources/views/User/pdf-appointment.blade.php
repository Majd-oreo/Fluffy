<!DOCTYPE html>
<html>
<head>
    <title>Appointment PDF</title>
    <style>
        body { font-family: sans-serif; font-size: 14px; }
        .header { background-color: #ff5b2e; color: white; padding: 10px; }
        .section-title { font-size: 16px; color: #ff5b2e; margin-top: 20px; }
        .line { border-bottom: 1px solid #ccc; margin-bottom: 10px; padding-bottom: 5px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Appointment Details (ID: {{ $appointment->id }})</h2>
    </div>

    <p class="section-title">Service Information</p>
    <p><strong>Service:</strong> {{ $appointment->service->name }}</p>
    <p><strong>Duration:</strong> {{ $appointment->service->duration }} minutes</p>
    <p><strong>Description:</strong> {{ $appointment->service->description }}</p>

    <p class="section-title">Pet Details</p>
    <p><strong>Pet Name:</strong> {{ $appointment->pet->name }}</p>
    <p><strong>Category:</strong> {{ $appointment->category->name }}</p>

    <p class="section-title">Appointment Information</p>
    <p><strong>Date & Time:</strong> {{ \Carbon\Carbon::parse($appointment->start_time)->format('F j, Y \a\t h:i A') }}</p>
    <p><strong>Price:</strong> ${{ number_format($appointment->category->price, 2) }}</p>
    <p><strong>Status:</strong> {{ $appointment->status }}</p>
</body>
</html>

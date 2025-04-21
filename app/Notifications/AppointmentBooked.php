<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Messages\MailMessage;

class AppointmentBooked extends Notification
{
    use Queueable;

    public $appointment;

    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'New Appointment Booked',
            'message' => 'An appointment for ' . $this->appointment->service->name . ' was booked.',
            'appointment_id' => $this->appointment->id,
            'start_time' => $this->appointment->start_time->toDateTimeString(),
        ];
    }
}

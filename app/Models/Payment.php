<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model name
    protected $table = 'payments';

    // Define the fillable properties (columns you want to allow mass assignment for)
    protected $fillable = [
        'user_id', 
        'appointment_id', 
        'amount', 
        'payment_method', 
        'status', 
        'transaction_id'
    ];

    // Define the relationships

    // A payment belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A payment belongs to an appointment
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

  

    // Accessor to get a formatted payment status
    public function getStatusAttribute($value)
    {
        return ucfirst($value); // Capitalize the first letter of the status
    }
}

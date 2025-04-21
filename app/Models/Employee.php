<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;



class Employee extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'user_id',
        'job_title',
        'salary',
        'status',
        'service_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class); // Each employee belongs to one service
    }
}

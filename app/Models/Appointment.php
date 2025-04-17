<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Appointment extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['user_id', 'pet_id', 'service_id', 'start_time', 'status','category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
  // In the Service model
  public function category()
  {
      return $this->belongsTo(Category::class);
  }
  

}

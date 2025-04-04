<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price','icon','duration','long_description'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);  
    }
    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }
    public function employees()
    {
        return $this->hasMany(Employee::class); // One service has many employees
    }
}


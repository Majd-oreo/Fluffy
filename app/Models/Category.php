<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name', 'icon', 'service_id','price'];

    public function service()
    {
        return $this->belongsTo(Service::class);  
    }
   
}

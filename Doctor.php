<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name', 'specialty', 'credentials', 'experience', 'rating', 'patients_count', 'image', 'status'
    ];
}

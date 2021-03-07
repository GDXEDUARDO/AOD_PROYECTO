<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule', 'brand', 'model', 'color', 'num_doors', 'description',
        'date_and_time_of_entry', 'date_and_time_of_departure', 'drivers_name'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcer extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'second_name', 'model', 'last_name', 'mothers_last_name', 'date_and_time_of_entry',
        'date_and_time_of_departure', 'minutes_in_the_cabin'
    ];
}

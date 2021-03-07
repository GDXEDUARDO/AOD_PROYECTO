<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    use HasFactory;
    protected $fillable = [
        'program_name', 'topic', 'assigned_announcer', 'invited_announcer_1', 'invited_announcer_2', 'invited_announcer_3',
        'invited_announcer_4', 'program_start_date_and_time', 'end_date_and_time_of_the_program', 'song_of_the_week'
    ];
}

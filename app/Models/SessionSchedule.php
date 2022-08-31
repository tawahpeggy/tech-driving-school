<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['session_id', 'schedule_id'];

    protected $table = 'session_schedule';
}

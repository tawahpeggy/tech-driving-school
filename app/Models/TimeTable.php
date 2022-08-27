<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    use HasFactory;

    protected $fillable = ['session_id', 'title', 'start_date', 'end_date', 'schedules'];

    protected $table = 'time_tables';
}

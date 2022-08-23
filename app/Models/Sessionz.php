<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessionz extends Model
{
    use HasFactory;

    protected $fillable = ['start', 'end'];

    protected $table = 'sessions';

    public function applications()
    {
        # code...
        return $this->hasMany(Application::class, 'session');
    }
}

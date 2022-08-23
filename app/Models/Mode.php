<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mode extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'name'];

    protected $table = 'modes';

    public function applications()
    {
        return $this->hasMany(Application::class, 'mode');
    }
}

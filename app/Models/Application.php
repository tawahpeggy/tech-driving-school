<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name', 'last_name', 'dob', 'pob', 'cni_number',
        'cni_date', 'cni_post', 'id_front', 'id_back', 
        'passport_photo', 'mode', 'session', 'user_id'
    ];

    protected $table = 'applications';

    public function mode()
    {
        # code...
        return $this->belongsTo(Mode::class, 'mode');
    }

    public function sessionz()
    {
        # code...
        return $this->belongsTo(Sessionz::class, 'session');
    }

    public function user()
    {
        # code...
        return $this->belongsTo(User::class, 'user_id');
    }

}

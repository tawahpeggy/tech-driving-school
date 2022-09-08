<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'label', 'url'];

    protected $table = 'post_links';

    public function post()
    {
        return $this->belongsTo('blog', 'post_id', 'id');
    }
}

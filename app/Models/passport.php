<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passport extends Model
{
    use HasFactory;
    protected $table = 'passport';
    public function users()
    {
        return $this->belongsTo(users::class);
    }
}

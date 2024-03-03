<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'education_histories';

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

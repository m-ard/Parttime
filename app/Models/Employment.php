<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;
    protected $table = 'employment_histories';

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

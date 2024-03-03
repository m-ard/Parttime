<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    protected $table = 'submissions';

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function vacancies()
    {
        return $this->belongsTo(Vacancy::class, 'id_lowongan_pekerjaan');
    }
}

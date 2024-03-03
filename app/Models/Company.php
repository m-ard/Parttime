<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_recruiter',
        'alamat',
        'nama_perusahaan',
        'no_perusahaan',
        'email_perusahaan',
        'jenis',
        'keterangan',
        'image',
    ];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'id_perusahaan');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $table = 'vacancies';
    // protected $fillable = [
    //     'id_lowongan_pekerjaan',
    //     'id_perusahaan',
    //     'posisi',
    //     'lokasi',
    //     'kategori',
    //     'tipe',
    //     'penempatan',
    //     'pendidikan',
    //     'jenis_kelamin',
    //     'pengalaman',
    //     'deskripsi',
    //     'hari_kerja',
    //     'jam_kerja',
    //     'tanggal_buka',
    //     'tanggal_tutup',
    //     'created_at',
    //     'updated_at',
    // ];
    
    // Function to filter vacancies based on category and job type
    public function scopeFilterByCategoryAndJobType($query, $category, $jobType)
    {
        if ($category) {
            $query->where('kategori', $category);
        }

        if ($jobType) {
            $query->where('tipe', $jobType);
        }

        return $query;
    }

    // Function to filter vacancies based on location
    public function scopeFilterByLocation($query, $location)
    {
        if ($location) {
            $query->where('lokasi', $location);
        }

        return $query;
    }

    // Function to filter vacancies based on experience
    public function scopeFilterByExperience($query, $experience)
    {
        if ($experience) {
            $query->where('pengalaman', $experience);
        }

        return $query;
    }

    // Function to filter vacancies based on posted within
    public function scopeFilterByPostedWithin($query, $postedWithin)
    {
        if ($postedWithin) {
            $now = date('Y-m-d');
            $startDate = date('Y-m-d', strtotime("-$postedWithin days", strtotime($now)));
            $query->whereBetween('tanggal_buka', [$startDate, $now]);
        }

        return $query;
    }
    
    public function company()
    {
        return $this->belongsTo(Company::class, 'id_perusahaan');
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class, 'id_lamaran');
    }
}

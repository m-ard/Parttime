<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'ttl',
        'bb',
        'jenis_kelamin',
        'tinggi',
        'agama',
        'kebangsaan',
        'status',
        'alamat',
        'no_hp',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function skills()
    {
        return $this->hasMany(Skill::class, 'id_skill');
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'id_riwayat_pendidikan');
    }

    public function employments()
    {
        return $this->hasMany(Employment::class, 'id_riwayat_pekerjaan');
    }

    public function awards()
    {
        return $this->hasMany(Award::class, 'id_penghargaan');
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class, 'id_pengalaman');
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class, 'id_lamaran');
    }

}

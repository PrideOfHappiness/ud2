<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'users';
    protected $primaryKey = 'userID';
    public $incrementing = false;
    protected $fillable = [
        'userID',
        'nama',
        'email',
        'password',
        'status',
        'login_via',
        'token_login',
        'visibility',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function setFotoUser(){
        return $this->hasMany(FotoUser::class, 'idUser', 'fotoUserID');
    }

    public function setUserDetail(){
        return $this->hasOne(UserDetail::class, 'idUser', 'userDetailID');
    }

    public function setLogLoginUser(){
        return $this->hasMany(LogLoginUser::class, 'idUser', 'logLoginID');
    }

    public function setMobil(){
        return $this->hasMany(Mobil::class, 'idUser', 'mobilID');
    }

    public function setLogMobil(){
        return $this->hasMany(LogMobil::class, 'idUser', 'logMobilID');
    }
}

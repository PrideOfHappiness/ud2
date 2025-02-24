<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $table = 'user_detail';
    protected $primaryKey = 'userDetailID';
    public $incrementing = false;
    protected $fillable = [
        'userDetailID',
        'idUser',
        'alamat',
        'idNegara',
        'gender',
        'deskripsi',
    ];

    public function getUser(){
        return $this->belongsTo(User::class, 'idUser', 'userID');
    }

    public function getKodeNegara(){
        return $this->belongsTo(KodeNegara::class, 'idNegara', 'kodeNegara');
    }
}

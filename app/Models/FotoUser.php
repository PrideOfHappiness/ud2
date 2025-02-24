<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoUser extends Model
{
    use HasFactory;
    protected $table = 'foto_user';
    protected $primaryKey = 'fotoUserID';
    public $incrementing = false;
    protected $fillable = [
        'fotoUserID',
        'idUser',
        'namaFile',
    ];

    public function getUser(){
        return $this->belongsTo(User::class, 'idUser', 'userID');
    }
}

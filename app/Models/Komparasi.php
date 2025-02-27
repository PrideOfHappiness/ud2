<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komparasi extends Model
{
    use HasFactory;
    protected $table = 'komparasi';
    protected $primaryKey = 'komparasiID';
    public $incrementing = false;
    protected $fillable = [
        'komparasiID',
        'idMobil',
        'idUser',
        'part',
        'stringGabungan',
    ];

    public function getMobil(){
        return $this->belongsTo(Mobil::class, 'idMobil', 'mobilID');
    }

    public function setFotoMobil(){
        return $this->hasMany(FotoMobil::class, 'idKomparasi', 'foto_mobilID');
    }
}

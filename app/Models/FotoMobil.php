<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoMobil extends Model
{
    use HasFactory;
    
    protected $table = 'foto_mobil';
    protected $primaryKey = 'foto_mobilID';
    public $incrementing = false;
    protected $fillable = [
        'foto_mobilID',
        'idMobil',
        'idKomparasi',
        'part',
        'stringGabungan',
    ];  

    public function getMobil(){
        return $this->belongsTo(Mobil::class, 'idMobil', 'mobilID');
    }

    public function getKomparasi(){
        return $this->belongsTo(Komparasi::class, 'idKomparasi', 'komparasiID');
    }
}

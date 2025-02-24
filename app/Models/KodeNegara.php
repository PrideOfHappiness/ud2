<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KodeNegara extends Model
{
    use HasFactory;

    protected $table = 'kode_negara';
    protected $primaryKey = 'kodeNegara';
    public $incrementing = false;
    protected $fillable = [
        'kodeNegara',
        'namaNegara',
        'namaFile',
    ];

    public function setUserDetail(){
        return $this->hasMany(UserDetail::class, 'idNegara', 'userDetailID');
    }
    public function setPlatNomor(){
        return $this->hasMany(PelatNomor::class, 'negaraID', 'platNomorID');
    }

    public function setMobil(){
        return $this->hasMany(Mobil::class, 'negara_asal', 'mobilID');
    }
}

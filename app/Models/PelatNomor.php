<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelatNomor extends Model
{
    use HasFactory;

    protected $table = 'plat_nomor';
    protected $primaryKey = 'platNomorID';
    public $incrementing = false;
    protected $fillable = [
        'platNomorID',
        'negaraID',
        'jenisPlatNomor',
        'ukurankarakter',
        'keterangan',
    ];

    public function getNegara(){
        return $this->belongsTo(KodeNegara::class, 'negaraID', 'kodeNegara');
    }

    public function setMobil(){
        return $this->hasMany(Mobil::class, 'idPlatNomor', 'mobilID');
    }
}

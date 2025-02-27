<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $primaryKey = 'mobilID';
    public $incrementing = false;
    protected $fillable = [
        'mobilID',
        'idJenis',
        'idMesin',
        'idBrand',
        'idUkuranKarakter',
        'idPlatNomor',
        'idUser',
        'idLetakSetir',
        'negara_asal',
        'namaMobil',
        'kode_body',
        'tahun_mobil',
        'noDataBuat',
        'noDataUbah',
        'jumlahUbah',
        'keterangan',
        'part',
        'benuaAsal',
    ];

    public function getJenis(){
        return $this->belongsTo(Jenis::class, 'idJenis', 'jenisID');
    }

    public function getMesin(){
        return $this->belongsTo(Mesin::class, 'idMesin', 'mesinID');
    }

    public function getBrand(){
        return $this->belongsTo(Brand::class, 'idBrand', 'brandID');
    }

    public function getUkuranKarakter(){
        return $this->belongsTo(UkuranKarakter::class, 'idUkuranKarakter', 'ukuranKarakterID');
    }

    public function getPlatNomor(){
        return $this->belongsTo(PelatNomor::class, 'idPlatNomor', 'platNomorID');
    }

    public function getUser(){
        return $this->belongsTo(User::class, 'idUser', 'userID');
    }

    public function getLetakSetir(){
        return $this->belongsTo(LatakSetir::class, 'idLetakSetir', 'letakSetirID');
    }

    public function getNegaraAsal(){
        return $this->belongsTo(KodeNegara::class, 'negara_asal', 'kodeNegara');
    }

    public function setMobilValue(){
        return $this->hasMany(MobilValue::class, 'idMobil', 'mobilValueID');
    }

    public function setFotoMobil(){
        return $this->hasMany(FotoMobil::class, 'idMobil', 'fotoMobilID');
    }

    public function setKomparasi(){
        return $this->hasMany(Komparasi::class, 'idMobil', 'idKomparasi');
    }

    public function setKembar(){
        return $this->hasMany(Kembar::class, 'idMobil', 'kembarID');
    }
}

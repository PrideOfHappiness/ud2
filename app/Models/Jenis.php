<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $table = 'jenis';
    protected $primaryKey = 'jenisID';
    public $incrementing = false;
    protected $fillable = [
        'jenisID',
        'jenis',
        'deskripsi',
    ];

    public function setJenisCampur(){
        return $this->hasMany(JenisCampur::class, 'idJenis', 'jenisCampurID');
    }

    public function setFotoJenis(){
        return $this->hasMany(FotoJenis::class, 'idJenis', 'fotoJenisID');
    }

    public function setMobil(){
        return $this->hasMany(Mobil::class, 'idJenis', 'MobilID');
    }
}

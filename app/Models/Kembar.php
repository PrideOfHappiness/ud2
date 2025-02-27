<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kembar extends Model
{
    use HasFactory;

    protected $table = 'kembar';
    protected $primaryKey = 'kembarID';
    public $incrementing = false;
    protected $fillable = [
        'kembarID',
        'idMobil',
        'idBrand',
        'namaMobil',
        'valuieIdentifier',
        'status',
    ];

    public function getMobil(){
        return $this->belongsTo(Mobil::class, 'idMobil', 'mobilID');
    }

    public function getBrand(){
        return $this->belongsTo(Brand::class, 'idBrand', 'brandID');
    }

}

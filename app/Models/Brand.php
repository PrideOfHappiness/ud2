<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brand';
    protected $primaryKey = 'brandID';
    public $incrementing = false;
    protected $fillable = [
        'brandID',
        'namaBrand',
        'kategori',
    ];

    public function setMobil(){
        return $this->hasMany(Mobil::class, 'idBrand', 'mobilID');
    }
}

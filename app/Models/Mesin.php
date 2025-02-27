<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    use HasFactory;

    protected $table = 'mesin';
    protected $primaryKey = 'mesinID';
    public $incrementing = false;
    protected $fillable = [
        'mesinID',
        'namaMesin',
        'kategori',
    ];

    public function setMobil(){
        return $this->hasMany(Mobil::class, 'idMesin', 'mobilID');
    }
}

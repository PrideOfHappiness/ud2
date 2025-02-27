<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UkuranKarakter extends Model
{
    use HasFactory;
    protected $table = 'ukuran_karakter';
    protected $primaryKey = 'ukuranKarakterID';
    public $incrementing = false;
    protected $fillable = [
        'ukuranKarakterID',
        'ukuranKarakter',
    ];

    public function setMobil(){
        return $this->hasMany(Mobil::class, 'idUkuranKarakter', 'mobilID');
    }
}

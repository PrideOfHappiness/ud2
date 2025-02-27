<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LatakSetir extends Model
{
    use HasFactory;

    protected $table = 'letak_setir';
    protected $primaryKey = 'letakSetirID';
    public $incrementing = false;
    protected $fillable = [
        'letakSetirID',
        'letakSetir',
    ];

    public function setMobil(){
        return $this->HasMany(Mobil::class, 'idLetakSetir', 'idMobil');
    }
}

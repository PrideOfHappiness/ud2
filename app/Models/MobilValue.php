<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilValue extends Model
{
    use HasFactory;

    protected $table = 'mobil_value';
    protected $primaryKey = 'mobilValueID';
    public $incrementing = false;
    protected $fillable = [
        'mobilValueID',
        'idMobil',
        'idKriteriaAHP',
        'valueKriteriaAHP',
        'status',
    ];

    public function getMobil(){
        return $this->belongsTo(Mobil::class, 'idMobil', 'mobilID');
    }

    public function getKriteriaAHP(){
        return $this->belongsTo(KriteriaAHP::class, 'ididKriteriaAHP', 'kriteriaAHPID');
    }
}

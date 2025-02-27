<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaAHP extends Model
{
    use HasFactory;

    protected $table = 'kriteria_ahp';
    protected $primaryKey = 'kriteriaAHPID';
    public $incrementing = false;
    protected $fillable = [
        'kriteriaAHPID',
        'kriteria',
    ];

    public function setValueAwalAHP(){
        return $this->hasMany(ValueAHPAwal::class, 'idKriteriaAHP', 'valueAwalAHPID');
    }
}

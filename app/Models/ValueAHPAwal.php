<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueAHPAwal extends Model
{
    use HasFactory;

    protected $table = 'value_ahp_awal';
    protected $primaryKey = 'valueAHPAwalID';
    public $incrementing = false;
    protected $fillable = [
        'valueAHPAwalID',
        'idKriteriaAHP',
        'subKriteria',
        'valueAwal',
        'valuekriteria',
    ];

    public function getKriteriaAHP(){
        return $this->belongsTo(KriteriaAHP::class, 'idKriteriaAHP', 'kriteriaAHPID');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisCampur extends Model
{
    use HasFactory;

    protected $table = 'jenis_campur';
    protected $primaryKey = 'jenisCampurID';
    public $incrementing = false;
    protected $fillable = [
        'jenisCampurID',
        'idJenis',
        'stringGabungan',
    ];

    public function getJenis(){
        return $this->belongsTo(Jenis::class, 'idJenis', 'jenisID');
    }
}

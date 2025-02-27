<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoJenis extends Model
{
    use HasFactory;

    protected $table = 'foto_jenis';
    protected $primaryKey = 'fotoJenisID';
    public $incrementing = false;
    protected $fillable = [
        'fotoJenisID',
        'idJenis',
        'namaFile',
    ];

    public function getJenis(){
        return $this->belongsTo(Jenis::class, 'idJenis', 'jenisID');
    }
}

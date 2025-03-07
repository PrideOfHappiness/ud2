<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogMobil extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'log_mobil';
    protected $primaryKey = 'logMobilID';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'logMobilID',
        'idMobil',
        'idUser',
        'keterangan',
        'norec',
    ];

    protected $casts = [
        'logMobilID' => 'string',
    ];

    public function getUser(){
        return $this->belongsTo(User::class, 'idUser', 'userID');
    }

    public function getMobil(){
        return $this->belongsTo(Mobil::class, 'idMobil', 'mobilID');
    }
}

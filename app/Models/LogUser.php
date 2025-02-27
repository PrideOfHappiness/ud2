<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogUser extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'log_user';
    protected $primaryKey = 'logUserID';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'logUserID',
        'idUser',
        'keterangan',
        'norec',
    ];

    protected $casts = [
        'logLoginID' => 'string',
    ];

    public function getUserID(){
        return $this->belongsTo(User::class, 'idUser', 'userID');
    }
}

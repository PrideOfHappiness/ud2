<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class LogLoginUser extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'log_login_user';
    protected $primaryKey = 'logLoginID';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'idUser',
        'dateLogin',
        'dateLogout',
    ];

    protected $casts = [
        'logLoginID' => 'string',
        'dateLogin' => 'datetime',
        'dateLogout' => 'datetime',
    ];

    public function getUserID(){
        return $this->belongsTo(User::class, 'idUser', 'userID');
    }
}

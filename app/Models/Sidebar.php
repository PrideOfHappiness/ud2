<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    use HasFactory;
    protected $table = 'sidebar';
    protected $primaryKey = 'sidebarID';
    public $incrementing = false;
    protected $fillable = [
        'sidebarID',
        'nama',
        'route',
        'icon',
        'order',
    ];

    public function setSubSidebar(){
        return $this->hasMany(SubSidebar::class, 'idSidebar', 'subSidebarID');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSidebar extends Model
{
    use HasFactory;

    protected $table = 'subSider';
    protected $primaryKey = 'subSidebarID';
    public $incrementing = false;
    protected $fillable = [
        'subSidebarID',
        'idSidebar',
        'nama',
        'route',
        'icon',
        'order',
    ];

    public function getSidebar(){
        return $this->belongsTo(Sidebar::class, 'idSidebar', 'sidebarID');
    }
}

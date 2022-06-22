<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Devices extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ["DeviceName", "Device", "manufacturer", "identifier", "ISN"];

    public $sortable = ['Device', 'DeviceName', 'manufacturer', 'identifier'];

    public function reservations()
    {
        return $this->hasMany(Reservations::class,'reservations');
    }

    

    
}

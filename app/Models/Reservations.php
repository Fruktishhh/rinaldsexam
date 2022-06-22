<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Reservations extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ["name", "surname", "email", "phone", "Device", "resdate", "enddate"];

    public $sortable =  ["name", "surname", "email", "phone", "Device", "resdate", "enddate"];

    public function devices()
    {
        return $this->hasMany(Devices::class,'device');
    }

    public function user()
    {
        return $this->BelongsToMany(User::class,'reservations');
    }



    
}

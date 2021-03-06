<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class race extends Model
{
    protected $primaryKey = 'idRace';
    protected $fillable = ['nomRace'];
    use HasFactory;

    public function bovins()
    {
        return $this->hasMany('App\Models\bovin');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesage extends Model
{
    protected $primaryKey = 'idPesage';
    use HasFactory;

    public function bovin()
    {
        return $this->belongsTo('App\Models\bovin');
    }
}

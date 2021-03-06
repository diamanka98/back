<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diagnostic extends Model
{
    protected $primaryKey = 'idDiagnostic';
    protected $fillable = ['dateMaladie','dateGuerison','maladie_id','bovin_id'];
    use HasFactory;

    public function maladie()
    {
        return $this->belongsTo('App\Models\maladie');
    }

    public function bovin()
    {
        return $this->belongsTo('App\Models\bovin');
    }
}

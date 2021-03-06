<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maladie extends Model
{
    protected $primaryKey = 'idMaladie';
    protected $fillable = ['nomMaladie'];
    use HasFactory;

    public function diagnostics()
    {
        return $this->hasMany('App\Models\diagnostic');
    }

}

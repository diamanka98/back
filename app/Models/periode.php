<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class periode extends Model
{
    protected $primaryKey = 'idPeriode';
    public $filable = ['nomPeriode','phase'];
    use HasFactory;
}

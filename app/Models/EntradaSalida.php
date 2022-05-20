<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntradaSalida extends Model
{
    use HasFactory;
    protected $guarded = ['codigo_entrada'];
    protected $table = "entrada_salida";
    protected $primaryKey = 'codigo_entrada';
    public $timestamps = false;
}

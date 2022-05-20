<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    use HasFactory;
    protected $guarded = ['id_carga'];
    protected $table = "carga";
    protected $primaryKey = 'id_carga';
    public $timestamps = false;
}

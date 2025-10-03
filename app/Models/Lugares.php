<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lugares extends Model
{
    protected $table = 'Lugares';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['NOMBRE', 'Descripcion', 
                            'Latitud', 'Longitud', 
                            'estado']; 
}

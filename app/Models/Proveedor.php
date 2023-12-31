<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'Proveedores';
    protected $primarykey = 'id';
    protected $fillable = ['razon_social', 'domicilio_proveedor', 'telefono_proveedor', 'localidad_proveedor'];
    public $timestamps = false;


}

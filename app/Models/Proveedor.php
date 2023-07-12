<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'Proveedor';
    protected $primarykey = 'cuit';
    protected $fillable = ['razon_social', 'domicilio', 'telefono', 'localidad'];
    public $timestamps = false;


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $table = 'Detalles';
    protected $primarykey = 'id';
    protected $fillable = ['id_comprobante', 'id_producto', 'cantidad'];
    public $timestamps = true;

    public function Comprobante(){
        return $this->hasOne(Comprobante::class, 'id', 'id_comprobante');
    }

    public function Producto(){
        return $this->hasOne(Producto::class, 'id', 'id_producto');
    }
}

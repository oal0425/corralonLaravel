<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $table = 'Detalles';
    protected $primarykey = 'id';
    protected $fillable = ['id_producto', 'nombre', 'precio', 'cantidad', 'total', 'id_usuario', 'fecha','total_venta'];
    public $timestamps = false;


    public function Producto(){
        return $this->hasOne(Producto::class, 'id', 'id_producto');
    }

    public function Usuario(){
        return $this->hasOne(Usuario::class, 'id', 'id_usuario');
    }
}

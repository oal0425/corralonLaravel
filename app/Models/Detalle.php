<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $table = 'Detalles';
    protected $primarykey = 'id';
    protected $fillable = ['id_producto', 'nombre', 'precio', 'cantidad', 'total', 'id_usuario', 'fecha'];
    public $timestamps = false;


    public function Producto(){
        return $this->hasOne(Product::class, 'id', 'id_producto');
    }

    public function Usuario(){
        return $this->hasOne(Usuario::class, 'id', 'id_usuario');
    }
}

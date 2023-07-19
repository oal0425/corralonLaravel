<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    protected $table = 'Carros';
    protected $primarykey = 'id';
    protected $fillable = ['id_usuario', 'id_producto', 'cantidad'];
    public $timestamps = false;

    public function Usuario(){
        return $this->hasOne(User::class, 'id', 'id_usuario');
    }

    public function Producto(){
        return $this->hasOne(Producto::class, 'id', 'id_producto');
    }
}

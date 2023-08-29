<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'Products';
    protected $primarykey = 'id';
    protected $fillable = ['nombre', 'marca', 'fecha_vencimiento', 'fecha_elaboracion', 'precio', 'stock_actual', 'stock_minimo', 'stock_repo', 'id_proveedor'];
    public $timestamps = false;

    public function Proveedor(){
        return $this->hasOne(Proveedor::class, 'id', 'id_proveedor');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;
    protected $table = 'Comprobantes';
    protected $primarykey = 'id';
    protected $fillable = ['id_usuario', 'id_detalle', 'fecha'];
    public $timestamps = false;


    public function Usuario(){

        return $this->hasOne(User::class,'id','id_usuario');
    }

    public function Detalle()
    {
        return $this->hasOne(Detalle::class,'id','id_detalle');
    }


}

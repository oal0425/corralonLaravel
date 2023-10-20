<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;
    protected $table = 'Comprobantes';
    protected $primarykey = 'id';
    protected $fillable = ['id_detalle', 'total', 'fecha'];
    public $timestamps = false;

    public function Detalle()
    {
        return $this->hasOne(Detalle::class,'id','id_detalle');
    }


}

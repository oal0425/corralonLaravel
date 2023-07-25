<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;
    protected $table = 'Comprobantes';
    protected $primarykey = 'id';
    protected $fillable = ['tipo', 'fecha', 'id_usuario'];
    public $timestamps = true;


    public function Usuario(){

        return $this->hasOne(User::class,'id','id_usuario');
    }


}

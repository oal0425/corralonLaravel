<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'Clientes';
    protected $primarykey = 'id';
    protected $fillable = ['nombre', 'apellido', 'telefono', 'domicilio', 'localidad', 'id_usuario', 'admin'];
    public $timestamps = false;


    public function Usuario(){

        return $this->hasOne(User::class,'id','id_usuario');
    }

}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'Cliente';
    protected $primarykey = 'id';
    protected $fillable = ['nombre', 'apellido', 'telefono', 'domicilio', 'localidad', 'admin', 'id_usuario'];
    public $timestamps = false;


    public function Usuario(){

        return $this->hasOne(User::class,'id','id_usuario');
    }

}



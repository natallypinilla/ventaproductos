<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable =['idcategoria','nombre'];
    protected $primaryKey ='idcategoria';
    /* public function productos(){
        return $this->hasMany(Productos::class,'idproducto');
    } */

}

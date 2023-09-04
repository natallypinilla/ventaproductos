<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable =['idproducto','idproveedor','idcategoria','idventa','nombre','descripcion','precio','imagen'];
    protected $primaryKey ='idproducto';
    public function categorias(){
        return $this->belongsTo(Categorias::class,'idcategoria');
    }
}

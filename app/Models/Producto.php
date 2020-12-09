<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = "productos";
    protected $fillable = ['nombre', 'tipo_id', 'precio', 'especie', 'fechaIngreso'];
    
    public function Tipo()
    {
        return $this->belongsTo(Tipo::Class);
    }

}

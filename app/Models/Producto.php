<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "productos";
    protected $fillable = ['nombre', 'tipo_id', 'precio', 'especie', 'fechaIngreso'];
    
    public function Tipo()
    {
        return $this->belongsTo(Tipo::Class);
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class);
    }
}

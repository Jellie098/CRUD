<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pedidos";
    protected $fillable = ['extra','user_id'];

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }

    public function getTotalAttribute()
    {
        $total = 0;
        foreach ($this->productos as $producto)
        {
            $total += $producto->precio;
        }
        
        return number_format($total, 2, ".", ",");
    }

}

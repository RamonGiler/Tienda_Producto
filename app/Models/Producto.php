<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Producto.php
class Producto extends Model
{
    protected $fillable = ['nombre', 'fecha_vencimiento', 'precio', 'cantidad', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

// app/Categoria.php
class Categoria extends Model
{
    protected $fillable = ['nombre'];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}

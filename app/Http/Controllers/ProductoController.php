<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function registrar(Request $request){
        $producto = new Producto();
        $producto->nombre= $request->nombre;
        $producto->precio_venta=$request->precio_venta; 
        $producto->Cantidad_stock=$request->Cantidad_stock;
        $producto->fecha_vencimiento=$request->fecha_vencimiento;
        $producto->save();
        return back();

    } 
    public function index(){
        $producto = Producto::Where('estado',true)->get();
        return view('producto');
    }
}


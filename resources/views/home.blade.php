@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">
    <h1>::Gestion de Producto ::</h1>
<form action="{{ url('producto') }}" method="post">
    @csrf
        <div>
            <label for="">nombre del producto</label>
            <input type="text" name='nombre' placeholder="ingrese nombre del producto">
        </div>
        <br>
        <div>
            <label for="">precio del producto</label>
            <input type="float" name='precio_venta' placeholder="ingrese precio del producto">
        </div>
        <br>
        <div>
            <label for="">ingrese cantidad del producto</label>
            <input type="integer" name='Cantidad_stock' placeholder="ingrese cantidad del producto ">
        </div>
        <br>
        <div>
            <label for="">ingrese fecha de vencimiento</label>
            <input type="date" name='fecha_vencimiento' placeholder="ingrese fecha de vencimiento ">
        </div>
        <br>
        <div>
            <label for="">ingrese Categoria</label>
            <input type="text" name='Categoria' placeholder="ingrese categoria ">
        </div>
        <br>
        
        <div>
            <button type="submit">Resgistrar</button>
        </div>
        <table border="1">
        <thead>
            <tr>
                <th>Item</th>
                 <th>Nombre</th>
                 <th>precio_venta</th>
                <th>Cantidad_stock</th>
                <th>fecha_vencimiento</th>
                <th>Categoria</th>
                <th>Acciones</th>
               
            </tr>
        </thead>
        <tbody>
           @foreach($productos as $item)
        <tr>
                <td>{{$item->id}}</td>
               <td>{{$item->nombre}}</td>
              <td>{{$item->precio_venta}}</td>
                <td>{{$item->Cantidad_stock}}</td>
                <td>{{$item->fecha_vencimiento}}</td>
                
               
                
               
                
            </tr>
            @endforeach
        </tbody>
    </form>
</p>
                </div>
            </div>
        </div>
    </div>
@stop

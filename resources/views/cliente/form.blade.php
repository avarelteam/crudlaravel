@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">

        @if (isset($cliente))<!--si existe estamos editando-->
            <h1>Editar cliente</h1>
        @else 
            <h1>Crear cliente</h1>
        @endif


        @if (isset($cliente))<!--si existe estamos editando y actualizando-->
            <form action="{{ route('cliente.update', $cliente) }}" method="POST">
                @method('PUT')
        @else 
            <form action="{{ route('cliente.store') }}" method="POST">
        @endif
        
            @csrf

            <!--<div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre del cliente">
                <p class="form-text">Escriba el nombre del cliente</p>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" placeholder="Apellidos del cliente">
                <p class="form-text">Escriba los apellidos del cliente</p>
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">dni</label>
                <input type="text" class="form-control" name="dni" placeholder="DNI del cliente" required>
                <p class="form-text">Escriba el DNI del cliente</p>
            </div>-->




            <div class="row mb-2">
                <div class="col">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control bg-primary text-white" name="nombre" placeholder="Nombre del cliente" value="{{ old('nombre') ?? @$cliente->nombre}}">
                    @error('nombre')
                        <p class="form-text text-danger">{{ $message }}</p>    
                    @enderror
                </div>
                <div class="col-6">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control bg-primary text-white" name="apellidos" placeholder="Apellidos del cliente" value="{{ old('apellidos') ?? @$cliente->apellidos}}">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion del cliente" value="{{ old('direccion') ?? @$cliente->direccion}}">
                </div>
                <div class="col">                  
                    <label for="poblacion" class="form-label">Poblacion</label>
                    <input type="text" class="form-control" name="poblacion" placeholder="Poblacion" value="{{ old('poblacion') ?? @$cliente->poblacion}}">                   
                </div>
                <div class="col">                  
                    <label for="provincia" class="form-label">Provincia</label>
                    <input type="text" class="form-control" name="provincia" placeholder="Provincia" value="{{ old('provincia') ?? @$cliente->provincia}}">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <label for="cp" class="form-label">Codigo postal</label>
                    <input type="text" class="form-control" name="cp" placeholder="Codigo postal del cliente" value="{{ old('cp') ?? @$cliente->cp}}">
                </div>
                <div class="col">                  
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" name="dni" placeholder="Dni del cliente" value="{{ old('dni') ?? @$cliente->dni}}">                   
                </div>
                <div class="col">                  
                    <label for="fnac" class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" name="fnac" placeholder="Cumpleaños" value="{{ old('fnac') ?? @$cliente->fnac}}">
                </div>
                <div class="col">                  
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" class="form-control" name="Edad" placeholder="Edad" step="0.01" value="{{ old('edad') ?? @$cliente->edad}}">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="tel" class="form-control" name="telefono" placeholder="Telefono del cliente" value="{{ old('telefono') ?? @$cliente->telefono}}">
                </div>
                <div class="col">                  
                    <label for="movil" class="form-label">Movil</label>
                    <input type="movil" class="form-control" name="movil" placeholder="Movil del cliente" value="{{ old('movil') ?? @$cliente->movil}}">                   
                </div>
                <div class="col">                  
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') ?? @$cliente->email}}">
                </div>
                <div class="col">                  
                    <label for="preno" class="form-label">Proxima renovacion</label>
                    <input type="date" class="form-control" name="preno" placeholder="Proxima renovacion" value="{{ old('preno') ?? @$cliente->preno}}">
                </div>
                <div class="col">                  
                    <label for="aviso" class="form-label">Avisar</label>
                    <input type="text" class="form-control" name="aviso" placeholder="Aviar al cliente" value="{{ old('aviso') ?? @$cliente->aviso}}">
                </div>
            </div>

            @if (isset($cliente))<!--si existe estamos editando-->
            <button type="submit" class="btn btn-info">Editar cliente</button>
            @else 
            <button type="submit" class="btn btn-info">Guardar cliente</button>
            @endif
            
        </form>


    </div>
    
@endsection
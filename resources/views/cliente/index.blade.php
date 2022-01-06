@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1>Listado de clientes</h1>
        <a href="{{ route('cliente.create') }}" class="btn btn-primary mb-5 mt-5">Alta nuevo cliente</a>

        @if (Session::has('mensaje'))
            <div class="alert alert-info my-5">
                {{Session::get('mensaje')}}
            </div>
        @endif


    
        <table class="table table-striped">
            <thead class="thead-dark">
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Dni</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @forelse ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellidos }}</td>
                        <td>{{ $cliente->dni }}</td>
                        <td>
                            <a href="{{ route('cliente.edit', $cliente) }}" class="btn btn-warning">Editar</a> 
                            <form action="{{ route('cliente.destroy', $cliente) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar este cliente')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No existen registros.</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
        @if($clientes->count())
            <!--paginacion-->
            {{ $clientes->links()}}
        @endif
        

    </div>
@endsection
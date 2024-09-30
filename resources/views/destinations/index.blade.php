@extends('adminlte::page')

@section('title', 'Destinos')

@section('content_header')
    <h1>Destinos</h1>
@stop

@section('content')
<a href="{{ route('destinations.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="destinations" class="table table-bordered shadow-lg mt-12">
        <thead class="text-white" style="background-color: #515E78;">
            <tr>
                <td width="15px">Nº</td>
                <th class="text-center">Nombre</th>
                <th class="text-center">Imagen</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Duracion</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destinations as $destination)
                <tr>
                    <td class="text-center">{{ $destination->id }}</td>
                    <td class="text-center">{{ $destination->name }}</td>
                    <td class="text-center">
                        <img src="{{ asset('storage/' .$destination->image) }}" alt="{{ $destination->name }}" class="img-fluid" style="max-width: 100px; max-height: 100px;">
                    </td>
                    <td class="text-center">{{ $destination->price }}</td>
                    <td class="text-center">{{ $destination->duration }}</td>
                    <td class="text-center">
                    <a href="{{ route('destinations.edit', $destination) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('destinations.show', $destination) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('destinations.destroy', $destination) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop


@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function(){
                    $('#destinations').DataTable({
                        "ordering":false,
                        "language":{
                            "search":       "Buscar",
                            "lengthMenu":   "Mostrar _MENU_ registros por pagina",
                            "info":         "Mostrando pagina _PAGE_de_PAGES_",
                            "paginate":     {
                                                "previus": "Anterior",
                                                "next": "Siguiente",
                                                "first": "Primero",
                                                "last": "Ultimo"
                            }
                        }
                    });
                }); 
    </script>
@endsection
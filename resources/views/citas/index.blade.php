@extends("layouts.app")

@section("titulo", "Citas")

@section("contenido")

<style>
    .btn-custom-primary {
        background-color:  #FFA500; /* Color personalizado */
        border-color: #ddff00;
        color: white; /* Color del texto */
    }

    .btn-custom-primary:hover {
        background-color:  #FF8C00; /* Cambio de color al pasar el mouse */
        border-color: #ffbb00;
    }

    .btn-custom-success {
        background-color: #2b7b00; /* Color verde personalizado */
        border-color: #28a745;
        color: white; /* Color del texto */
    }

    .btn-custom-success:hover {
        background-color: #3dac01; /* Cambio de color al pasar el mouse */
        border-color: #3dac01;
    }
     .btn-custom-delete {
        background-color: #ff1100; /* Color personalizado para el botón Eliminar */
        border-color: #f44336;
        color: white;
        font-size: 1.25rem;
        padding: 10px 20px;
    }

    .btn-custom-delete:hover {
        background-color: #ff386a; /* Cambio de color al pasar el mouse */
        border-color: #f05a58;
    }
</style>
<head>
    <title>Citas</title>
    <script src="https://kit.fontawesome.com/6e4ca82ba2.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Lista de Citas</h1>

     <div class="p-5">
        <div class="mb-3 text-end">
            <a href="{{ route('citas.create') }}" class="btn btn-custom-primary">Crear Cita</a>
        </div>

    <div class="table-reponsive">
<table class="table table-striped table-bordered table-hover">
  <thead class="bg-primary">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre Y Apellidos</th>
    {{--   <th scope="col">Email</th>
      <th scope="col">Telefono</th> --}}
      <th scope="col">Nombre Mascota</th>
      {{-- <th scope="col">Raza</th> --}}
      <th scope="col">Clase Mascota</th>
      <th scope="col">Fecha Cita</th>
      <th scope="col">Hora Cita</th>
      <th></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
     @foreach ($cit as $c)
     <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nombre }}</td>
                {{--     <td>{{ $c->email }}</td>
                    <td>{{ $c->telefono }}</td> --}}
                    <td>{{ $c->nombre_mascota }}</td>
                   {{--  <td>{{ $c->raza }}</td> --}}
                    <td>{{ $c->clase_mascota }}</td>
                    <td>{{ $c->fecha_cita }}</td>
                    <td>{{ $c->hora_cita }}</td>
                     <td>
                        <a href="/citas/{{$c->id}}" class="btn btn-custom-success">Ver</a>
                        <form action="/citas/{{$c->id}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-custom-delete"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                    </td>
                </tr>
                 @endforeach
  </tbody>

</table>
</div>
@endsection



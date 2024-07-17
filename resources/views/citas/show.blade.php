@extends("layouts.app")

@section("titulo", "Detalles usuario")

@section('contenido')
<style>
    .btn-custom-edit {
        background-color: #3a4ab8; /* Color personalizado para el botón Editar */
        border-color: #4c59af;
        color: white; /* Color del texto */
        font-size: 1.25rem;
        padding: 10px 20px;
    }

    .btn-custom-edit:hover {
        background-color: #7d4caf; /* Cambio de color al pasar el mouse */
        border-color: #7d4caf;

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


<div class="card text-center">
    <script src="https://kit.fontawesome.com/6e4ca82ba2.js" crossorigin="anonymous"></script>
  <div class="card-header">
    Detalles
  </div>
  <div class="card-body">
    <h5 class="card-title">Informacion del Usuario</h5>
    <p class="card-text">{{$cit->nombre}}</p>
        <p class="card-text">{{$cit->email}}</p>
        <p class="card-number">{{$cit->telefono}}</p>
        <p class="card-text">{{ $cit->nombre_mascota }}</p>
        <p class="card-text">{{ $cit->raza }}</p>
        <p class="card-text">{{ $cit->clase_mascota }}</p>
        <p class="card-date">{{ $cit->fecha_cita }}</p>
        <p class="card-time">{{ $cit->hora_cita }}</p>

   <a href="/citas/{{$cit->id}}/edit" class="btn btn-custom-edit btn-sn">
            <i class="fa-regular fa-pen-to-square"></i>
        </a>
        {{-- <a href="/citas/{{$cit->id}}/destroy" class="btn btn-custom-delete btn-sn">
            <i class="fa-solid fa-trash-can"></i>
        </a> --}}
  </div>
  <div class="card-footer text-body-secondary">
    Editar Informacion
  </div>
</div>

@endsection

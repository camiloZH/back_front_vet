@extends("layouts.app")

@section("titulo", "Editar Cita")

@section("contenido")

<style>
    .btn-custom-update {
        background-color: #FFA500; /* Color personalizado para el botón Actualizar */
        border-color: #FFA500;
        color: white; /* Color del texto */
        font-size: 1.25rem;
        padding: 10px 20px;
    }

    .btn-custom-update:hover {
        background-color: #FF8C00; /* Cambio de color al pasar el mouse */
        border-color: #FF8C00;
    }
</style>


<br>
<h3 class="text-center">Editar informacion</h3>
    <form action="/citas/{{$cit->id}}" method="POST" enctype="multipart/form-data">
         @method("PUT")
        @csrf
    <div class="mb-3">
        <label for="nombre"class="form-label"> Nombre y apellidos </label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cit->nombre}}">
    </div>


    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$cit->email}}">
    </div>

    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="number" class="form-control" id="telefono" name="telefono" value="{{$cit->telefono}}">
    </div>

    <div class="mb-3">
        <label for="nombre_mascota" class="form-label">Nombre de la mascota</label>
        <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" value="{{$cit->nombre_mascota}}">
    </div>

    <div class="mb-3">
        <label for="raza" class="form-label">Raza</label>
        <input type="text" class="form-control" id="raza" name="raza" value="{{$cit->raza}}">
    </div>

    <p>Clase de mascota</p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="clase_mascota" id="perro" value="perro" >
        <label class="form-check-label" for="perro">
            Perro
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="clase_mascota" id="gato" value="gato">
        <label class="form-check-label" for="gato">
            Gato
        </label>
    </div>

    <br>
    <div class="mb-3">
        <label for="fecha_cita" class="form-label">Fecha de la cita</label>
        <input type="date" class="form-control" id="fecha_cita" name="fecha_cita" value="{{$cit->fecha_cita}}">
    </div>

    <div class="mb-3">
        <label for="hora_cita" class="form-label">Hora de la cita</label>
        <input type="time" class="form-control" id="hora_cita" name="hora_cita" value="{{$cit->hora_cita}}">
    </div>
   <br>
    <div class="d-grid gap-2 col-6 mx-auto">
       <button class="btn btn-custom-update btn-lg" type="submit">Actualizar</button>
    </div>

</form>

@endsection

@extends("layouts.app")

@section("titulo", "agendar cita")

@section("contenido")


<br>
<h3 class="text-center">Agendar nueva cita</h3>
    <form action="/citas" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="nombre"class="form-label"> Nombre y apellidos </label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>


    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="number" class="form-control" id="telefono" name="telefono">
    </div>

    <div class="mb-3">
        <label for="nombre_mascota" class="form-label">Nombre de la mascota</label>
        <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota">
    </div>

    <div class="mb-3">
        <label for="raza" class="form-label">Raza</label>
        <input type="text" class="form-control" id="raza" name="raza">
    </div>

    <p>Clase de mascota</p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="clase_mascota" id="perro" value="perro">
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
        <input type="date" class="form-control" id="fecha_cita" name="fecha_cita">
    </div>

    <div class="mb-3">
        <label for="hora_cita" class="form-label">Hora de la cita</label>
        <input type="time" class="form-control" id="hora_cita" name="hora_cita">
    </div>
   <br>
    <div class="d-grid gap-2 col-6 mx-auto">
       <button class="btn btn-warning" type="submit">Agendar</button>
    </div>

</form>

@endsection


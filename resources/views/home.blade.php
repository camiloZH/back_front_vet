@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

<style>
    .bg-light-gray {
        background-color: #e76c0f;
    }
    .custom-text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra para mejorar la legibilidad del texto */
    }
    .position-absolute {
        top: 40;
        left: 70;
    }
</style>



  <div class="position-relative">
        <img src="{{ asset('images/imagen.jpg') }}" alt="Imagen de bienvenida" class="img-fluid w-100">
       <div class="position-absolute top-50 start-50 translate-middle text-center text-primary custom-text-shadow">
    <h1 class="display-4">Bienvenid@ a PetHealth</h1>
    <p class="lead">Cuidando a tus mascotas con amor y dedicación</p>
</div>

@endsection

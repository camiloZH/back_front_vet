@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')

<div class="container">
    <h1 class="text-center my-4">Contáctanos</h1>

    <div class="form-container">
        <div class="contact-form">
            <form>
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="asunto" class="form-label">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                </div>
                <button type="button" class="btn btn-custom-primary">Enviar Mensaje</button>
            </form>
        </div>
        <div class="contact-image">
            <img src="https://via.placeholder.com/300" alt="Contact Image" class="img-fluid">
        </div>
    </div>
</div>

<footer class="mt-5">
    <div class="social-icons">
        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
    </div>
    <p class="mt-3">© 2024 PetHealth. Todos los derechos reservados.</p>
</footer>

@endsection

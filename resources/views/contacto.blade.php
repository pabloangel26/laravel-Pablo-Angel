@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <div class="contacto-container">
        <img id="Imagen" src="{{ asset('images/Control.jpg') }}" alt="Imagen de Contacto">

        <div class="cont">
            <div class="formulario">
                @if(session('success_message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success_message') }}
                    </div>
                @endif

                <h2>Contacto</h2>

                <form id="contacto" class="row g-3" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <input type="text" name="nombre" class="index-sec-05-input" id="inputName" placeholder="Nombres" required>
                    </div>
                    <div class="col-12">
                        <input type="text" name="asunto" class="index-sec-05-input" id="inputAsunto" placeholder="Asunto*" required>
                    </div>
                    <div class="col-12">
                        <input type="email" name="email" class="index-sec-05-input" id="inputEmail" placeholder="E-mail*" required>
                    </div>
                    <div class="col-12">
                        <textarea name="texto" class="index-sec-05-input" id="textareaMessage" rows="3" placeholder="Mensaje" required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="global-02-bnt">Enviar →</button>
                    </div>
                </form>
            </div>

            <div class="contacto">
                <h2>Contacto de la Empresa</h2>
                <p>Dirección: Calle 80#22-65, Bogotá</p>
                <p>Teléfono: 3217235094</p>
                <p>Correo Electrónico: conecta.sisas@gmail.com</p>

                <h2>Ubicación en Google Maps</h2>
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.51141489705!2d-74.107807!3d4.64829755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1706236203402!5m2!1ses!2sco"
                        width="400"
                        height="300"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

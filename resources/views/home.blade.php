@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<body>
    <div class="servicios">
          <img id="Imagen" src="{{ asset('images/Home.jpg') }}" alt="Imagen de Home">
      <section id="seccion1">
        <h2>Audio</h2>
        <p>Sumérgete en un sonido excepcional con nuestras soluciones de audio de alta fidelidad. Desde sistemas de cine en casa hasta salas de conferencias, creamos experiencias auditivas envolventes y personalizadas.
        </p>
      </section>
      <section id="seccion2">
        <h2>Video</h2>
        <p>Diseñamos y instalamos sistemas de video de última generación. Desde pantallas 4K hasta proyecciones personalizadas, garantizamos una experiencia visual excepcional en cualquier entorno.
        </p>
      </section>
      <section id="seccion3">
        <h2>Ilumoinación</h2>
        <p>Controla la atmósfera de tus espacios con nuestra iluminación inteligente. Ajusta colores, intensidades y escenas con un toque, creando ambientes que se adaptan a tus necesidades y estados de ánimo.
        </p>
      </section>
      <section id="seccion4">
        <h2>Control</h2>
        <p>Haz que tu espacio trabaje para ti con nuestra automatización inteligente. Controla dispositivos, sistemas de entretenimiento, iluminación y más, todo desde la palma de tu mano.
        </p>
        <p>
          Conozca diferentes aplicaciines donde podemos aplicar la automatización de sistemas inteligentes:
        </p>
      </section>
    </div>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Residencial</th>
          <th scope="col">Corporativo</th>
          <th scope="col">Hoteleria</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Audio</td>
          <td>Videoconferencias</td>
          <td>Iluminación</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Video</td>
          <td>Video</td>
          <td>Audio</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>iluminación</td>
          <td>Motores</td>
          <td>Audio</td>
        </tr>
      </tbody>
    </table>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/wpMBLQ0q2Ng?si=QPxx0FUgnMGuyyY6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
    </iframe>
  </body>

@endsection



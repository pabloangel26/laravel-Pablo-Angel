@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')

<body>

    <img id="Imagen" src="{{ asset('images/Automation.jpg') }}" alt="Imagen de Nosotros">
    <div id="contenido">
      <b>Bienvenido a CSI, tu socio confiable en la integración de sistemas para crear entornos inteligentes y conectados. Nuestros servicios van más allá de la tecnología; ofrecemos experiencias que transforman la forma en que vives y trabajas.</b>
    </div>
    <section>
      <div class="column">
        <h2>Nuestra Misión</h2>
        <p>“Nuestra misión es proporcionar soluciones tecnológicas integrales y vanguardistas que mejoren la calidad de vida y la eficiencia operativa de nuestros clientes. Nos comprometemos a ofrecer servicios de integración de sistemas de audio, video, iluminación, circuito cerrado de televisión y automatización para crear espacios inteligentes y conectados. A través de la innovación, la experiencia técnica y el compromiso con la satisfacción del cliente, buscamos superar expectativas, facilitar la comodidad y seguridad, y optimizar el rendimiento tecnológico en todos los entornos en los que trabajamos." </p>
      </div>
      <div class="column">
        <h2>Nuestra Visión</h2>
        <p>"Nos visualizamos como líderes en el ámbito de la integración tecnológica, siendo reconocidos por nuestra excelencia en la creación de soluciones innovadoras que transforman los espacios en entornos inteligentes y conectados. Nos esforzamos por proporcionar a nuestros clientes experiencias únicas y personalizadas, aprovechando la sinergia entre el audio, el video, la iluminación, las redes, el circuito cerrado de TV y la automatización. Nuestra visión se basa en la creación de entornos que no solo satisfacen las necesidades presentes, sino que también anticipan y se adaptan a las futuras demandas tecnológicas. Aspiramos a ser la elección preferida de empresas y particulares que buscan la excelencia en la integración de sistemas para lograr espacios inteligentes, eficientes y altamente funcionales."</p>
      </div>
      <div class="column">
        <h2>Nuestro Compromiso</h2>
        <p>“Asumimos el compromiso de la excelencia en cada aspecto de nuestro negocio, desde la selección de productos hasta la implementación de soluciones y el soporte continuo. Buscamos continuamente la innovación y la mejora, anticipándonos a las tendencias del mercado y adoptando tecnologías emergentes para proporcionar a nuestros clientes soluciones de última generación.”</p>
      </div>
    </section>
  </body>






@endsection

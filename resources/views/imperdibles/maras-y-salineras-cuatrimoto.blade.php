<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Maras Moray & Salineras Cuatrimotos | Tierras Vivas Travel</title>
    <meta name="description"
        content="Maras Moray salinas es un recorrido lleno de lugares divertidos y espectaculares. ¡Únete a nosotros en esta aventura única de medio día! Visitamos las..." />
    <meta property="og:description"
        content="Maras Moray salinas es un recorrido lleno de lugares divertidos y espectaculares. ¡Únete a nosotros en esta aventura única de medio día! Visitamos las..." />
    <meta name="keywords"
        content="Maras moray, tour a maras moray, maras moray salineras, viajar al valle sagrado, valle sagrado de los incas, tour en maras moray, agricultura inca, salineras de maras" />
    <meta property="og:image" content="" />
    <link rel="canonical" href="https://tierrasvivas.net/imperdibles/maras-y-salineras-cuatrimoto" />
</head>

<body>
    @include('layouts.menu-tours')
    <div class="maras">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">
                    @if (session()->has('flash'))
                    <div id="alerta">
                        <span>¡Mensaje enviado con éxito!</span>
                        <span style="float: right">
                            <button id="boton-alerta" onclick="fade();"><i class="icon icon-close"></i>
                            </button>
                        </span>
                    </div>
                    @endif
                    <?php
                    $titulo = 'Maras Moray & Salineras Cuatrimotos';
                    echo $titulo;
                    ?>
                </h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="/">Inicio</a> / <a href="{{route('imperdibles')}}">Imperdibles</a> /
                                <a>Maras, Moray & Salineras</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2>Maras Moray & Salineras Cuatrimotos Tour</h2>
                    <img src="{{ asset('img/galeria/maras-moray-salineras-cuatrimotos-atv.webp') }}"
                        alt="Cuatrimotos en en Valle Sagrado" loading="lazy" width="100%"><br><br>
                    <p class="p-salkantay">
                        Nuestro servicio inicia con el recojo de su hotel entre las 6:30 a. m. y 7:00 a. m. para el
                        grupo de la mañana, o 11:30 a. m. a 12:00 m para el grupo de la tarde, y así dirigirnos a la
                        Comunidad de Cruzpata (1 hora de viaje aprox.) lugar donde realizamos la actividad de
                        Cuatrimotos, en el recorrido podemos detenernos en Miradores y así poder apreciar el Majestuoso
                        Valle Sagrado; llegando a la comunidad pasaremos a equiparnos con los implementos de seguridad
                        (casco y guantes) para posteriormente tener una instrucción detallada del óptimo desarrollo de
                        esta actividad, así como medidas de seguridad y precauciones.<br><br>

                        Posteriormente realizamos la actividad que está acompañada de un paisaje natural magnífico,
                        donde comenzamos a conducir por los diferentes tramos incas y sentir la máxima sensación de
                        viajar sobre las cuatrimotos, el primer lugar a visitar es el Complejo Arqueológico de Moray,
                        luego continuamos el paseo con dirección hacia el Poblado de Maras y finalmente visitamos Las
                        Salineras, en nuestro recorrido podemos divisar el Valle Sagrado, las montañas y picos
                        nevados.<br><br>

                        Al finalizar la actividad se retorna a la ciudad del Cusco.
                    </p>

                    <h2>Itinerario completo Maras, Moray:</h2>
                    <h3>Cusco – Cruzpata – Moray – Maras – Salineras</h3>
                    <p class="p-salkantay">
                        (Pueden elegir el horario que mas sea de su conveniencia y este acorde a su itinerario de
                        viaje).
                    </p><br><br>
                    <div class="col-lg-12">
                        <nav style="display: flex">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin: auto">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Incluye
                                </button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">No Incluye
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <ul class="paneles">
                                    <li>✓ Recojo en el hotel 30 minutos antes de la salida del Cusco.</li>
                                    <li>✓ Traslados del hotel a la comunidad de Cruzpata.</li>
                                    <li>✓ Instructor profesional bilingüe (inglés-español) capacitado para la actividad
                                        de Cuatrimotos.</li>
                                    <li>✓ Equipo de Seguridad (casco, guantes).</li>
                                    <li>✓ Kit de primeros auxilios.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <ul class="paneles">
                                    <li>&#66228; Alimentación y bebidas no mencionadas en el programa.</li>
                                    <li>&#66228; Seguro de Vida.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ShareThis BEGIN -->
                    <h3 class="text-center">Compartir</h3>
                    <div class="sharethis-inline-share-buttons"></div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v13.0"
                                        nonce="goeGVUvy"></script>
                    <div class="fb-comments"
                        data-href="https://www.tierrasvivas.net/imperdibles/maras-y-salineras-cuatrimoto"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->
                </div>
                <div class="col-lg-4">
                    <div class="sticky">
                        @include('layouts.reservar')
                    </div>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours Relacionados:</h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="../machupicchu/tour-machu-picchu-2-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/tour-a-machu-picchu-tierras-vivas.webp') }}"
                                alt="Machu Picchu por 2 días" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Tour Machu Picchu por tren 2 Días/ 1 Noche</h5>
                            <p class="text-card">El Tour a Machu Picchu 2 Días es uno de los más libres de estrés
                                disponibles. El transporte y el alojamiento están...</p>
                            <a href="../machupicchu/tour-machu-picchu-2-dias" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="../machupicchu/machu-picchu-en-carro-2-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/Machu-Picchu-por-carro-2-dias.webp') }}"
                                alt="Machu Picchu en carro 2 días" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Machu Picchu por carro 2 Días</h5>
                            <p class="text-card">Esta excelente excursión conocida como “Machu Picchu por carro” o
                                “Ruta Amazónica“, está dirigida a los viajeros y...</p>
                            <a href="../machupicchu/machu-picchu-en-carro-2-dias" class="boton-card">Más
                                detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="../machupicchu/valle-sagrado-a-machu-picchu">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/valle-sagrado-machu-picchu-2-dias.webp') }}"
                                alt="Card image cap" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Valle Sagrado a Machu Picchu</h5>
                            <p class="text-card">El tour de 2 días del Valle Sagrado a Machu Picchu implica la
                                experiencia de visitar el famoso mercado de...</p>
                            <a href="../machupicchu/valle-sagrado-a-machu-picchu" class="boton-card">Más
                                detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="../imperdibles/excursion-al-valle-sagrado-vip">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/excursion-al-valle-sagrado-vip.webp') }}"
                                alt="Valle sagrado de los incas" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Excursión VIP al Valle Sagrado</h5>
                            <p class="text-card">El Tour Valle Sagrado VIP consiste en un día de visita guiada en
                                los sitios arqueológicos de Pisac...</p>
                            <a href="../imperdibles/excursion-al-valle-sagrado-vip" class="boton-card">Más
                                detalles</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
    <!---banner--------->
    <div class="banner-destinos">
        <div class="banner-container">
            <h3 class="h3-banner">Tours en peru 2022</h3>
            <p class="p-banner">TOUR OPERATOR PERÚ</p>
            <P class="p-banner">Tierras Vivas es tour operador turístico desde 2006. Somos especialistas en
                viajes de aventura y caminata. Reserve con nosotros su proxima visita a Perú. Conoce las mejores
                opciones en tours alrededor de <strong>Perú</strong></P>
            <P class="p-banner">
                <a href="" class="a-reserva" data-toggle="modal" data-target="#exampleModal">¡Reserva ahora!</a>
            </P>
        </div>
    </div>
    @include('layouts.pop-up-booking')
    @include('layouts.foot')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

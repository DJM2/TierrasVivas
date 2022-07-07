<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Machu Picchu Magico 3 Dias/ 2 Noches | Tierras Vivas Travel</title>
    <meta name="description"
        content="Durante estas vacaciones en Machu Picchu, puede disfrutar de una visita guiada por la ciudad de Cusco, admirar los monumentos naturales e incas del Valle Sagrado" />
    <meta property="og:description"
        content="Durante estas vacaciones en Machu Picchu, puede disfrutar de una visita guiada por la ciudad de Cusco, admirar los monumentos naturales e incas del Valle Sagrado" />
    <meta name="keywords"
        content="Valle sagrado de los incas, tour al valle sagrado de los incas, vistas espectaculares del valle sagrado de los incas" />
    <meta property="og:image" content="" />
    <link rel="canonical" href="https://tierrasvivas.net/paquetes/peru-aventurero-11-dias" />
</head>

<body>
    @include('layouts.menu-tours')
    <div class="machu">
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
                    $titulo = 'Machu Picchu Magico 3 Dias - 2 Noches';
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
                            <p><a href="/">Inicio</a> / <a href="../paquetes">Paquetes en Perú</a> /
                                <a>Machu Picchu mágico 3 días</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2>Tour en Machu Picchu mágico</h2>
                    <img src="{{ asset('img/galeria/huayna-picchu-girl-view.webp') }}"
                        alt="Vista panoramica desde el Huayna Picchu" loading="lazy" width="100%"><span>Foto: Vista
                        panoramica desde el huayna Picchu</span><br><br>
                    <p class="p-salkantay">
                        Durante estas vacaciones en Machu Picchu, puede disfrutar de una visita guiada por la ciudad de
                        Cusco, admirar los monumentos naturales e incas del Valle Sagrado de los Incas, apreciar la
                        naturaleza cambiante al continuar a Machu Picchu en tren, pernocte en Aguas Calientes (una
                        ciudad justo debajo de la ciudad de Inka) y visite los baños termales antes de finalmente
                        disfrutar de una visita guiada a la joya arquitectónica de los incas: Machu Picchu.
                    </p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button acordion" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Itinerario Corto
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h3>Día 01: Cusco</h3>
                                    <ul>
                                        <li>Recojo del Aeropuerto en horas de la mañana.</li>
                                        <li>Traslado a su hotel (Explicación detallada de todos los tours y
                                            recomendaciones).</li>
                                        <li>Tour de la Ciudad de 2pm a 7pm. (Visita Qoricancha, Sacsayhuamán, Qenqo,
                                            Tambomachay y
                                            Pucapucara).</li>
                                        <li>Pernocte de hotel en Cusco.</li>
                                    </ul>

                                    <h3>Día 02: Machu Picchu</h3>
                                    <ul>
                                        <li>Traslado hacia Ollantaytambo en horas de la mañana para abordar el tren
                                            (2hrs de viaje
                                            aprox.).</li>
                                        <li>Viaje en Tren de Ollantaytambo a Aguas Calientes (1 hora y media de viaje
                                            aprox.).</li>
                                        <li>Traslado en autobús a Machu Picchu.</li>
                                        <li>Visita guiada de Machu Picchu (2 horas aprox.).</li>
                                        <li>Caminata al Huayna Picchu (opcional, 2 horas, sin guía).</li>
                                        <li>Retorno en bus hacia Aguas Calientes.</li>
                                        <li>En horas de la tarde retorno en tren de Aguas Calientes a Ollantaytambo o
                                            Poroy.</li>
                                        <li>Traslado de retorno de la Estacion de Tren a Cusco.</li>
                                        <li>Arribando a Cusco traslado a su hotel.</li>
                                        <li>Pernocte de hotel en Cusco.</li>
                                    </ul>

                                    <h3>Día 03: Cusco</h3>
                                    <ul>
                                        <li>Llegado el momento de salida, recojo en el hotel y traslado al aeropuerto
                                            para abordar su
                                            vuelo de regreso a casa.
                                        </li>
                                        <li>Fin de los servicios.</li>
                                    </ul>
                                    <img src="{{ asset('img/galeria/Valle-sagrado-de-los-Incas.webp') }}"
                                        alt="Valle sagrado de los Incas" width="100%" loading="lazy"><span>Foto:
                                        Fortaleza de
                                        Ollantaytambo</span><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button acordion collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Itinerario detallado
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h3>Día 01. Recepción en Cusco - Excursión City tour</h3>
                                    <p class="p-salkantay">
                                        Recepción en el aeropuerto y traslado al hotel seleccionado en Cusco, lugar
                                        donde se servirá un aromático mate de coca estimulante para la altura de la
                                        ciudad, para luego poder descansar y tomar el almuerzo antes del inicio del tour
                                        por la ciudad.<br><br>

                                        1:30 PM City Tour: Que comprende visita al Templo del Sol o Koricancha, Plaza de
                                        armas, calles principales, mercado central(San Pedro), además visitará las 02
                                        ruinas aledañas a la ciudad, La Fortaleza de Sacsayhuamán y finalmente “kenko”,
                                        a las 6:00 PM Traslado al hotel.<br><br>

                                        Noche de hotel en Cusco.
                                    </p>

                                    <h3>Día 02. Cusco - Machu Picchu - Cusco</h3>
                                    <p class="p-salkantay">
                                        5:00 AM pasaremos a recogerlos de su hotel en Cusco, los llevaremos a la
                                        estación de trenes ubicado en la localidad de Ollantaytambo (1 hora 30 minutos
                                        de viaje en carro) lugar donde abordaremos nuestro tren para luego realizar
                                        nuestro viaje con destino al poblado de “Aguas Calientes” (2000 msnm) que tiene
                                        una duración de 2 horas.<br><br>

                                        Al llegar a la estación de tren, nuestro guía los estará esperando con un cartel
                                        y sus nombres, con él se dirigirá a la estación de buses, para ascender 400 m de
                                        altura, por un camino zigzagueante, durante 30 minutos hasta llegar a la
                                        increíble maravilla del mundo “El Santuario de Machu Picchu”, conocida como “La
                                        Ciudad Perdida de los Incas”.<br><br>
                                        <!-----Relacionado medio------------>
                                    <div class="relacionado-medio">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="../aventura/salkantay-trek-a-machu-picchu-4-dias"
                                                    target="_blank">
                                                    <img class="img-fluid"
                                                        src="{{ asset('img/thumb/montana-trekking-salkantay.webp') }}"
                                                        alt="" loading="lazy">
                                                </a>
                                            </div>
                                            <div class="col-lg-8">
                                                <a href="../aventura/salkantay-trek-a-machu-picchu-4-dias"
                                                    target="_blank">
                                                    <strong>Salkantay Trek a Machu Picchu 4 Días / 3 Noches</strong>
                                                    <br>
                                                    El Camino a Salkantay de 4 días es una caminata alternativa al
                                                    Camino Inca. No en el camino habitual, esta es
                                                    una aventura innovadora para los viajeros de acción</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-----Fin Relacionado medio------------>

                                    Al llegar a la ciudadela de Machu Picchu pasaremos por el control donde usted
                                    entregará su boleto de ingreso, desde este lugar se iniciará la excursión
                                    guiada, visitará los principales recintos de la ciudad como: la Plaza Principal,
                                    la Torre Circular, el Sagrado Reloj Solar, los Cuartos Reales, el Templo de las
                                    Tres Ventanas y los cementerios, la visita guiada será por más de dos
                                    horas.<br><br>

                                    Al concluir se le dará tiempo libre para dar un paseo por la ciudadela y visitar
                                    Machu Picchu por cuenta propia, tiene como opcion hacer la caminta a la puerta
                                    del sol o puente inka, luego retornaremos al pueblo de Aguas Calientes donde
                                    tomar sus alimentos en uno de los variados restaurantes (el almuerzo no incluye
                                    en el paquete).<br><br>

                                    Por la tarde tomará el tren de regreso al Cusco (debe presentarse en la estación
                                    30 minutos antes de la hora de salida de su tren), el retorno seguirá el mismo
                                    trayecto que el viaje de ida, al llegar a la estación de Trenes en
                                    Ollantaytambo, lo estaremos esperando para llevarlo a su hotel en Cusco (viaje
                                    de 1 hora y 30 minutos en carro). Estaremos llegando al Cusco 8:00 PM
                                    aproximadamente.<br><br>

                                    Noche de hotel en Cusco.
                                    </p>
                                    <img src="{{ asset('img/galeria/tour-a-machu-picchu-tierras-vivas.webp') }}"
                                        alt="Saltuario de machu Picchu" loading="lazy" width="100%"><span>Foto:
                                        Santuario de Machu
                                        Picchu</span><br><br>
                                    <h3>Día 3. Cusco - retorno</h3>
                                    <p class="p-salkantay">
                                        Por la mañana desayuno en el hotel. A hora oportuna recojo del hotel y traslado
                                        al aeropuerto para tomar nuestro vuelo de retorno a lima.<br><br>

                                        Fin de los servicios.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                    <li>✓ Traslados aeropuerto – hotel aeropuerto.</li>
                                    <li>✓ Excursión: City Tour (transporte, guía y entradas).</li>
                                    <li>✓ Excursión machupicchu.</li>
                                    <li>✓ Transporte cusco – Ollanta (estación de tren) – cusco.</li>
                                    <li>✓ Tren ida y retorno Ollanta – aguas calientes – ollanta (tren Turistico).</li>
                                    <li>✓ Bus subida y bajada aguas calientes – machupicchu.</li>
                                    <li>✓ Guía Oficial de turismo.</li>
                                    <li>✓ Entrada a machupicchu.</li>
                                    <li>✓ Hotel 02 noches en cusco.</li>
                                    <li>✓ Traslado al hotel.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <ul class="paneles">
                                    <li>&#66228; Alimentación no detallada como almuerzos y cenas.</li>
                                    <li>&#66228; Opcional almuerzo buffet en el pueblo de Machupicchu USD 27 (a petición
                                        del cliente).</li>
                                    <li>&#66228; Vuelos aéreos Lima – Cusco – Lima (opcional costo extra de USD 230).
                                    </li>
                                    <li>&#66228; Entrada a la montaña Huayna Picchu o montaña Machu Picchu (USD 25
                                        opcional).</li>
                                    <li>&#66228; Entrada a los baños termales (S / .15 soles opcional).</li>
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
                    <div class="fb-comments" data-href="https://www.tierrasvivas.net/paquetes/machupicchu-3-dias"
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
                        <a href="../imperdibles/tour-al-valle-sagrado-peru">
                            <img class="card-img-top" src="{{ asset('img/thumb/valle-sagrado-cusco-tour-1.webp') }}"
                                alt="Valle sagrado de los incas, Urubamba" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Tour al Valle Sagrado de los Inca Perú</h5>
                            <p class="text-card">El Valle Sagrado de los Incas fue sin duda un área clave de
                                asentamiento para los Incas. </p>
                            <a href="../imperdibles/tour-al-valle-sagrado-peru" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="../paquetes/machupicchu-3-dias">
                            <img class="card-img-top" src="{{ asset('img/thumb/machu-picchu-travel-tour.webp') }}"
                                alt="Card image cap" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Machu Picchu Magico 3 Dias</h5>
                            <p class="text-card">Durante estas vacaciones en Machu Picchu, puede disfrutar de una
                                visita guiada por la ciudad de Cusco...</p>
                            <a href="../paquetes/machupicchu-3-dias" class="boton-card">Más detalles</a>
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

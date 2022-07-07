<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Tour a la Laguna Humantay | Tierras Vivas Travel</title>
    <meta name="description"
        content="La Laguna Humantay está rodeado de imponentes glaciares que forman parte de los Andes y la Cordillera Blanca, entre ellos los majestuosos nevados del Apu. " />
    <meta property="og:description"
        content="La Laguna Humantay está rodeado de imponentes glaciares que forman parte de los Andes y la Cordillera Blanca, entre ellos los majestuosos nevados del Apu. " />
    <meta name="keywords"
        content="Tour a Humantay, Humantay salkantay, Camino a la laguna Humantay, Laguna Humantay, Humantay full day, Humantay dia completo, Viaja a Humantay, Conoce Humantay " />
    <meta property="og:image" content="" />
    <link rel="canonical" href="https://tierrasvivas.net/imperdibles/tour-a-la-laguna-humantay" />
</head>

<body>
    @include('layouts.menu-tours')
    <div class="humantay">
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
                    <?php $titulo = 'Laguna Humantay'; echo $titulo; ?>
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
                            <p><a href="/">Inicio</a> / <a href="../tours-imperdibles-en-peru">Imperdibles</a> /
                                <a>Laguna Humantay</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2>Tour a la Laguna Humantay</h2>
                    <img src="{{ asset('img/galeria/tour-a-la-laguna-de-humantay.webp') }}" alt="Lago Titicaca Puno"
                        loading="lazy" width="100%"><br><br>
                    <p class="p-salkantay">
                        La Laguna Humantay está rodeado de imponentes glaciares que forman parte de los Andes y la
                        Cordillera Blanca, entre ellos los majestuosos nevados de Apu Salkantay y Humantay que en el
                        deshielo dan lugar a la espléndida Laguna de Humantay, un destino nuevo para todos los
                        aventureros con hermosos paisajes. Reserve el viaje y cuando la visite transformará su forma de
                        ver la naturaleza.
                    </p>

                    <h2>Itinerario Laguna Humantay</h2>
                    <p class="p-salkantay">
                        Nuestro recorrido inicia con el recojo del hotel entre las 4:30 a.m. y 5:00 a. m. para luego
                        dirigirnos a bordo de nuestro transporte al distrito de Mollepata (2 horas aprox.). Arribamos a
                        este pequeño y pintoresco poblado tenemos nuestro desayuno americano y luego un tiempo libre
                        para utilizar los servicios higiénicos, comprar bebidas hidratantes y bocadillos. Posteriormente
                        continuamos nuestro viaje durante 1 hora adicional hasta Soraypampa con una altitud de 3,900 m
                        s. n. m. (punto de inicio de nuestra caminata).<br><br>

                        Nuestra aventura comienza con una vista panorámica de los nevados Salkantay y Humantay. Donde
                        tenemos una breve descripción de la caminata, recomendaciones e indicaciones por parte de
                        nuestro Guía antes de iniciar el ascenso; una vez listos comenzamos nuestra travesía hacia la
                        Laguna Humantay ubicado a 4,300 m s. n. m., después del ascenso de una hora y media
                        aproximadamente podremos apreciar la mágica laguna a los pies del nevado Humantay, es ahí donde
                        tendremos la explicación respectiva del lugar y por supuesto tiempo libre para fotografías,
                        disfrutar y explorar las orillas de la Laguna Turquesa.<br><br>

                        Una vez satisfechos de la majestuosidad de este lugar retornaremos a nuestra movilidad que nos
                        espera en Soraypampa, para luego retornar a la localidad de Mollepata donde nos espera nuestro
                        almuerzo. Posteriormente retornaremos a la ciudad de Cusco dando por finalizado nuestro
                        recorrido a las 5:00 p. m. aproximadamente.
                    </p>
                    <!-----Relacionado medio------------>
                    <div class="relacionado-medio">
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="vinicunca-7-colores" target="_blank">
                                    <img class="img-fluid" src="{{ asset('img/thumb/vinicunca-tour.webp') }}"
                                        alt="" loading="lazy">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <a href="vinicunca-7-colores" target="_blank"">
                                    <strong>Montaña de 7 Colores Cusco Tour</strong>
                                    <br>
                                    La Montaña de 7 Colores o “Vinicunca” es un lugar majestuoso y un regalo de la
                                    naturaleza.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-----Fin Relacionado medio------------>

                    <div class=" col-lg-12">
                                    <nav style="display: flex">
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin: auto">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-home" type="button" role="tab"
                                                aria-controls="nav-home" aria-selected="true">Incluye
                                            </button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-profile" type="button" role="tab"
                                                aria-controls="nav-profile" aria-selected="false">No Incluye
                                            </button>
                                            <button class="nav-link" id="nav-llevar-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-llevar" type="button" role="tab"
                                                aria-controls="nav-llevar" aria-selected="false">¿Qué llevar a la
                                                laguna?
                                            </button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">
                                            <ul class="paneles">
                                                <li>✓ Recojo del Hotel en Cusco.</li>
                                                <li>✓ Transporte turístico de ida y retorno.</li>
                                                <li>✓ Guía Profesional (Español o Inglés).</li>
                                                <li>✓ Comidas: 01 Desayuno y 01 Almuerzo.</li>
                                                <li>✓ Ingreso a la Laguna de Humantay.</li>
                                                <li>✓ Bastones de caminata.</li>
                                                <li>✓ Botiquín de primeros auxilios y Oxígeno.</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                            aria-labelledby="nav-profile-tab">
                                            <ul class="paneles">
                                                <li>&#66228; Alimentación y bebidas no mencionadas en el programa.</li>
                                                <li>&#66228; Seguro de viaje.</li>
                                                <li>&#66228; Actividades extras y propinas para el personal (opcional).
                                                </li>
                                                <li>&#66228; Caballo Opcional (USD 30)</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="nav-llevar" role="tabpanel"
                                            aria-labelledby="nav-llevar-tab">
                                            <ul class="paneles">
                                                <li>&#10038; Zapatos adecuados para la caminata.</li>
                                                <li>&#10038; Botella de agua</li>
                                                <li>&#10038; Traje de baño o toalla (En caso que desee ingresar a las
                                                    frías aguas de
                                                    la Laguna Humantay)</li>
                                                <li>&#10038; Bloqueador solar.</li>
                                                <li>&#10038; Poncho de lluvia.</li>
                                                <li>&#10038; Bocadillos.</li>
                                                <li>&#10038; Dinero en soles, No dólares.</li>
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
                                data-href="https://www.tierrasvivas.net/imperdibles/tour-a-la-laguna-humantay"
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
                                <a href="../aventura/camino-inca-campamento-2-dias">
                                    <img class="card-img-top" loading="lazy"
                                        src="{{ asset('img/thumb/Camino-Inca-2-Dias-1-Noche.webp') }}" loading="lazy"
                                        alt="Camino Inca 2 días">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Camino Inca Campamento 2 Dias</h5>
                                    <p class="text-card">Itinerario Detallado Día 01: Cusco – Ollantaytambo – Km
                                        104 –
                                        Puente Ruinas El primer día...</p>
                                    <a href="../aventura/camino-inca-campamento-2-dias" class="boton-card">Más
                                        detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="../aventura/salkantay-trek-a-machu-picchu-4-dias">
                                    <img class="card-img-top" loading="lazy"
                                        src="{{ asset('img/thumb/camino-a-salkantay-machu-picchu.webp') }}"
                                        loading="lazy" alt="Camino Salkantay a Machu Picchu">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Salkantay Trek a Machu Picchu 4 Días</h5>
                                    <p class="text-card">Día 01: Mollepata – Challacancha – Soraypampa Pasamos a
                                        recogerlos
                                        a partir de las 05:00 am de sus...</p>
                                    <a href="../aventura/salkantay-trek-a-machu-picchu-4-dias"
                                        class="boton-card">Más
                                        detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="../imperdibles/vinicunca-7-colores">
                                    <img class="card-img-top" src="{{ asset('img/thumb/vinicunca-tour.webp') }}"
                                        alt="Tour a Vinicunca" loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Montaña de 7 Colores Cusco Tour</h5>
                                    <p class="text-card">La Montaña de 7 Colores o “Vinicunca” es un lugar
                                        majestuoso y un
                                        regalo de la naturaleza.</p>
                                    <a href="../imperdibles/vinicunca-7-colores" class="boton-card">Más detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="../imperdibles/city-tour-en-cusco-peru">
                                    <img class="card-img-top"
                                        src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                        alt="City tour Cusco Sacsayhuaman" loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">City Tour en Cusco</h5>
                                    <p class="text-card">La Excursion por la ciudad del Cusco, templo y centros
                                        arqueologicos es perfecto para conocer la...</p>
                                    <a href="../imperdibles/city-tour-en-cusco-peru" class="boton-card">Más
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

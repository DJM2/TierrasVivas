<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>llactapata tour to Machu Picchu</title>
    <meta name="description"
        content="Conoce con tierras vivas los mejores destinos para conocer Perú. Tours familiares, tours en pareja, tours privados, tours en grupos." />
    <meta name="keywords"
        content="Destinos peru, conoce peru, viajar a peru, viajes a peru, conocer peru, reservar peru, destinos hacia peru, reservar cusco, tours a cusco, tours a lima, tours a arequipa, tours a puno" />
    <meta property="og:image" content="" />
    <link rel="canonical" href="https://tierrasvivas.net/destinos-peru" />
</head>

<body>
    @include('layouts.menu')
    <div class="destinos">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Encuentra los mejores destinos para Perú</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h2 class="h1-index">
                        <rojo>Perú</rojo>
                    </h2>
                    <p class="p-salkantay">
                        Desierto y selva, costa y montaña, existen varios destinos en el Perú que ofrecen un sinfín de
                        actividades, tesoros antiguos y modernos, y la espectacular belleza de nuestros bosques,
                        montañas y costas.
                        <br><br>
                        <strong>Viajar al Perú</strong> es despertar sueños pendientes, es conectarse con uno mismo, es
                        adentrarse en 5
                        mil años de historia viva. Prepárate para dominar las olas en caballos de totora, tablas de surf
                        y disfrutar de los atardeceres en oasis con dunas protectoras. En las montañas, con el sonido de
                        las quenas en el viento, respirarás el aire puro de los Andes y contemplarás con devoción la
                        armonía del hombre con la naturaleza en <strong> Machu Picchu.</strong> En la selva, el río
                        Amazonas te recibirá
                        con delfines rosados y te invitará a bailar, a ser libre. Recorrer los destinos del Perú es
                        disfrutar de una gastronomía mestiza, única y reconocida en el mundo. Si tu corazón dice que sí,
                        atrévete a visitar los Mejores <strong> Destinos Turísticos de Perú.</strong>
                    </p>
                    <h3>Top destinos turísticos de Perú</h3>
                    <p class="p-salkantay">
                        Visite las impresionantes ruinas de los Incas, ciudadelas, ríos emblemáticos, playas, valles
                        históricos y parajes naturales del Perú. No te pierdas el<strong> Top Destinos Turísticos del
                            Perú</strong> que
                        te mencionamos a continuación.
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours a Machu Picchu:</h2>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/camino-inca-cantera-peru">
                            <img class="card-img-top" src="{{ asset('img/thumb/camino-inca.webp') }}"
                                alt="camino inca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Camino Inca Cantera Peru</h5>
                            <p class="text-card">Cachicata o Inca Quarry es una de las antiguas canteras utilizadas
                                por las civilizaciones Pre-Inca e Inca para construir el vasto complejo…</p>
                            <a href="destinos/camino-inca-cantera-peru" class="boton-card">Ver detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/lago-titicaca-peru">
                            <img class="card-img-top" src="{{ asset('img/thumb/lago-titicaca.webp') }}"
                                alt="Lago Titicaca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lago Titicaca</h5>
                            <p class="text-card">Antes del amanecer en el lago Titicaca, una neblina azul cubre
                                nuestra vista. Muchos conejillos de indias corren para...</p>
                            <a href="destinos/lago-titicaca-peru" class="boton-card">Ver detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{route('puno')}}">
                            <img class="card-img-top" src="{{ asset('img/thumb/puno.webp') }}" alt="Tour a Puno"
                                loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Puno</h5>
                            <p class="text-card">Puno es una de las ciudades más importantes de la orilla del lago
                                Titicaca, el lago más navegable y...</p>
                            <a href="{{route('puno')}}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{route('colca-canyon')}}">
                            <img class="card-img-top" src="{{ asset('img/thumb/canon-de-colca.webp') }}"
                                alt="cañon del Colca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cañon de Colca</h5>
                            <p class="text-card">Alcanza una profundidad de 3.400 m, 62 millas (100 km) de largo.
                                El Cañón del Colca se encuentra entre...</p>
                            <a href="{{route('colca-canyon')}}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/vilcabamba">
                            <img class="card-img-top" src="{{ asset('img/thumb/vilcapampa.webp') }}"
                                alt="Vilcabamba Peru" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Valle Vilcabamba</h5>
                            <p class="text-card">Hasta hace poco, Vilcabamba era un rincón relativamente seguro y
                                accesible de la naturaleza.</p>
                            <a href="destinos/vilcabamba" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/llactapata">
                            <img class="card-img-top" src="{{ asset('img/thumb/llactapata-inca-trail.webp') }}"
                                alt="Llactapata inca trail" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Llactapata</h5>
                            <p class="text-card">LLactapata significa en Quechua lugar (aldea, pueblo, ciudad,
                                país, nación), pata significa elevado colocado sobre una orilla (de un río)</p>
                            <a href="destinos/llactapata" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/valle-sagrado-de-los-incas">
                            <img class="card-img-top" src="{{ asset('img/thumb/Valle-sagrado-de-los-Incas.webp') }}"
                                alt="Valle sagrado de los incas" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Valle Sagrado de los Incas</h5>
                            <p class="text-card">El Valle Sagrado de los Incas es un valle del río Urubamba. El
                                valle comienza a 15 km al norte de la ciudad de Cusco</p>
                            <a href="destinos/valle-sagrado-de-los-incas" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/selva-amazonica-peru">
                            <img class="card-img-top" src="{{ asset('img/thumb/Amazonas-1.webp') }}"
                                alt="Tour en amazonas Peru" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Selva Amazonica</h5>
                            <p class="text-card">Si eres un amante de la naturaleza, debes visitar la mayor selva
                                tropical del Perú. Aquí puede encontrar...</p>
                            <a href="destinos/selva-amazonica-peru" class="boton-card">Más detalles</a>
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

            <h3 class="h3-banner">Camino Inca 2022</h3>
            <p class="p-banner">TOUR OPERATOR PERÚ</p>
            <P class="p-banner">Tierras Vivas es tour operador al Camino Inca desde 2006. Somos especialistas en
                viajes de aventura y
                caminata. Reserve con nosotros su proxima caminata a la ruta de los Incas, finalizando en la ciudad
                perdida
                de los Incas – <strong>Machu Picchu</strong></P>
            <P class="p-banner">
                <a href="" class="a-reserva" data-toggle="modal" data-target="#exampleModal">¡Reserva ahora!</a>
            </P>
        </div>
    </div>
    @include('layouts.pop-up-booking')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{route('lares')}}">
                            <img class="card-img-top" src="{{ asset('img/thumb/lares.webp') }}"
                                alt="Tour a lares Cusco" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lares trek</h5>
                            <p class="text-card">Informacion de Lares Trek Las excursiones y Lares Trek comienzan
                                con una caminata el día programado para...</p>
                            <a href="{{route('lares')}}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/lineas-de-nazca-peru">
                            <img class="card-img-top" src="{{ asset('img/thumb/Lineas-de-Nazca.webp') }}"
                                alt="Lineas de Nazca Ica peru" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lineas de Nazca</h5>
                            <p class="text-card">Informacion sobre las Linea de Nazca Durante muchos años, las
                                Líneas de Nazca han sido un misterio.</p>
                            <a href="destinos/lineas-de-nazca-peru" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{route('lima')}}">
                            <img class="card-img-top" src="{{ asset('img/thumb/lima-tour.webp') }}"
                                alt="Tour en Lima Peru" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lima</h5>
                            <p class="text-card">Perú es un país ubicado en el este de América del Sur, que limita
                                con Ecuador, Colombia, Brasil...</p>
                            <a href="{{route('lima')}}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/cusco-ombligo-del-mundo">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/ciudad-del-cusco-tierras-vivas.webp') }}"
                                alt="Ciudad del Cusco" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cusco</h5>
                            <p class="text-card">Informacion general del Cusco Si bien Cusco y Machu Picchu son
                                destinos imprescindibles...</p>
                            <a href="destinos/cusco-ombligo-del-mundo" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{route('ollantaytambo')}}">
                            <img class="card-img-top" src="{{ asset('img/thumb/tour-en-ollantaytambo.webp') }}"
                                alt="Tour en Ollantaytambo" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Ollantaytambo</h5>
                            <p class="text-card">Historia de Ollantaytambo El pueblo se pronuncia
                                “oy-yahn-tie-tahm-bo”, pero todos lo llaman “Ollanta”.
                            </p>
                            <a href="{{route('ollantaytambo')}}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{route('salkantay')}}">
                            <img class="card-img-top" src="{{ asset('img/thumb/salkantay-trek.webp') }}"
                                alt="Salkantay camino inca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Apu Salkantay</h5>
                            <p class="text-card">Este lugar está dominado por las aguas turquesas de los
                                manantiales que contrastan con el blanco de la nieve y el cielo intenso. </p>
                            <a href="{{route('salkantay')}}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{route('machupicchu')}}">
                            <img class="card-img-top" src="{{ asset('img/thumb/machu-picchu-travel-tour.webp') }}"
                                alt="Tour camino a MachuPicchu" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Machu Picchu</h5>
                            <p class="text-card">Información sobre Machu Picchu Machu Picchu es el atractivo más
                                importante del viaje a Perú.</p>
                            <a href="{{route('machupicchu')}}" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="destinos/camino-inca-a-machu-picchu">
                            <img class="card-img-top" src="{{ asset('img/thumb/camino-inca-peru.webp') }}"
                                alt="Camino Inca a Machu Picchu" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Camino Inca</h5>
                            <p class="text-card">El Camino Inca es la ruta mas popular a Machu Picchu. La caminata
                                comienza en el Km 82.</p>
                            <a href="destinos/camino-inca-a-machu-picchu" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
    @include('layouts.foot')
</body>

</html>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Travel Agency Tierras Vivas</title>
    <meta name="description"
        content="Tierras Vivas es una agencia de viajes en Perú que tiene mas de 15 años de experiencia en el rubro turistico, dando siempre calidad de servicio con cada cliente." />
    <meta name="keywords"
        content="Viaja a Peru, conoce peru, reservar peru, como viajar a peru, como viajar a machu picchu, reservar machu picchu, book machu picchu, reservar tour a machu picchu, reservar cusco" />
    <meta property="og:image" content="" />
    <link rel="canonical" href="https://tierrasvivas.net" />
</head>

<body>
    @include('layouts.menu')
    <div class="hero">
        <!---- formulario
            ----------------->
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <form class="form-index">
                        @csrf
                        <h3 class="h1-index-book">Book your trip to Perú!</h3>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="text" class="form-control" id="name" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="date" class="form-control" id="inputPassword4">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="date" class="form-control" id="inputPassword4">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" class="form-control" id="adultos" placeholder="Adultos">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" class="form-control" id="childs" placeholder="Niños">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" id="mensaje" rows="3" style="height: 2.8em" placeholder="Message:"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="boton-index">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--------Fin formulario ---------->
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="h1-index">
                        <rojo>Tierras Vivas</rojo> Viajes a Machu Picchu
                    </h1>
                    <p class="p-salkantay">Somos una empresa tour operador de <strong> viajes de aventura y
                            turismo</strong>
                        tradicional con experiencia, profesional y dinámica fundada en 2006. Contamos con un personal
                        altamente preparado y siempre dispuesto a brindarle un servicio personalizado en Sudamérica.
                        Nuestros viajes de aventura en Perú involucran una amplia gama de diferentes estilos para
                        satisfacer las necesidades de cualquier viajero. Nuestra mayor especialidades son las<strong>
                            caminatas
                            por el Camino Inca y Salkantay</strong>. Sin embargo, no nos limitamos a esto, ¡podemos
                        organizar
                        cualquier viaje a Perú a su solicitud!
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours a Machu Picchu:</h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="machupicchu/tour-a-machu-picchu-1-dia">
                            <img class="card-img-top" src="{{ asset('img/thumb/tour-a-machu-picchu-1-dia.webp') }}"
                                alt="Tour a Machu Picchu full day" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Tour a Machu Picchu en 1 Día</h5>
                            <p class="text-card">Machu Picchu es una de las 7 Maravillas del Mundo Moderno más
                                visitadas por turistas, tiene hermosas...</p>
                            <a href="machupicchu/tour-a-machu-picchu-1-dia" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="machupicchu/tour-machu-picchu-2-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/tour-a-machu-picchu-tierras-vivas.webp') }}"
                                alt="Machu Picchu por 2 días" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Tour Machu Picchu por tren 2 Días/ 1 Noche</h5>
                            <p class="text-card">El Tour a Machu Picchu 2 Días es uno de los más libres de estrés
                                disponibles. El transporte y el alojamiento están...</p>
                            <a href="machupicchu/tour-machu-picchu-2-dias" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="machupicchu/machu-picchu-en-carro-2-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/Machu-Picchu-por-carro-2-dias.webp') }}"
                                alt="Machu Picchu en carro 2 días" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Machu Picchu por carro 2 Días</h5>
                            <p class="text-card">Esta excelente excursión conocida como “Machu Picchu por carro” o
                                “Ruta Amazónica“, está dirigida a los viajeros y...</p>
                            <a href="machupicchu/machu-picchu-en-carro-2-dias" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="machupicchu/valle-sagrado-a-machu-picchu">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/valle-sagrado-machu-picchu-2-dias.webp') }}"
                                alt="Card image cap" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Valle Sagrado a Machu Picchu</h5>
                            <p class="text-card">El tour de 2 días del Valle Sagrado a Machu Picchu implica la
                                experiencia de visitar el famoso mercado de...</p>
                            <a href="machupicchu/valle-sagrado-a-machu-picchu" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Perú Aventura:</h2>
                    <p class="p-salkantay">Tierras Vivas es especialista en viajes de aventura y caminatas por las
                        rutas del Perú. Las
                        actividad Peru Aventura ofrecen paquetes de aventura para disfrutar del hermoso país del Perú,
                        vivir la aventura de un viaje increíble y conocer por qué este estilo es genial para ti. Como
                        los viajeros se mueven a menudo a pie por las zonas rurales, el senderismo les brinda una vista
                        de cerca de paisajes increíbles. Muchos excursionistas viajan por áreas aisladas, lo que les
                        brinda una experiencia muy diferente en comparación con aquellos que viajan en grupos
                        organizados a destinos peruanos más populares.</p>
                </div>
                <h2>{{ $titulo }}</h2>
                <div class="space"></div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="aventura/inca-jungle-a-machu-picchu">
                            <img class="card-img-top" loading="lazy"
                                src="{{ asset('img/thumb/Inca-Jungle-machu-picchu.webp') }}" loading="lazy"
                                alt="Inca Jungle a Machu Picchu">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Inca Jungle a Machu Picchu 4 Dias</h5>
                            <p class="text-card">Es la mejor opción para aquellos que prefieren una manera más
                                aventurera y adrenalina para caminar a Machu Picchu.</p>
                            <a href="aventura/inca-jungle-a-machu-picchu" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="aventura/cachicata-a-machu-picchu">
                            <img class="card-img-top" loading="lazy"
                                src="{{ asset('img/thumb/camino-a-cachicata-machu-picchu.webp') }}" loading="lazy"
                                alt="Camino Cachicata a Machu Picchu">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cachicata a Machu Picchu 4 Dias</h5>
                            <p class="text-card">La proximidad de Cachicata a Machu Picchu hace que la caminata a
                                su alrededor sea una alternativa atractiva al Camino Inca.</p>
                            <a href="aventura/cachicata-a-machu-picchu" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="aventura/camino-inca-campamento-2-dias">
                            <img class="card-img-top" loading="lazy"
                                src="{{ asset('img/thumb/Camino-Inca-2-Dias-1-Noche.webp') }}" loading="lazy"
                                alt="Camino Inca 2 días">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Camino Inca Campamento 2 Dias</h5>
                            <p class="text-card">Itinerario Detallado Día 01: Cusco – Ollantaytambo – Km 104 –
                                Puente Ruinas El primer día...</p>
                            <a href="aventura/camino-inca-campamento-2-dias" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="aventura/salkantay-trek-a-machu-picchu-4-dias">
                            <img class="card-img-top" loading="lazy"
                                src="{{ asset('img/thumb/camino-a-salkantay-machu-picchu.webp') }}" loading="lazy"
                                alt="Camino Salkantay a Machu Picchu">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Salkantay Trek a Machu Picchu 4 Días</h5>
                            <p class="text-card">Día 01: Mollepata – Challacancha – Soraypampa Pasamos a recogerlos
                                a partir de las 05:00 am de sus...</p>
                            <a href="aventura/salkantay-trek-a-machu-picchu-4-dias" class="boton-card">Más
                                detalles</a>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
    <!---banner--------->
    <div class="banner">
        <div class="banner-container">
            <h3 class="h3-banner">Camino Inca 2022</h3>
            <p class="p-banner">TOUR OPERATOR PERÚ</p>
            <P class="p-banner">Tierras Vivas es tour operador al Camino Inca desde 2006. Somos especialistas en
                viajes de aventura y
                caminata. Reserve con nosotros su proxima caminata a la ruta de los Incas, finalizando en la ciudad
                perdida
                de los Incas – <strong>Machu Picchu</strong></P>
            <p class="p-banner">
                <a href="" class="a-reserva" data-toggle="modal" data-target="#exampleModal">¡Reserva ahora!</a>
            </p>
        </div>
    </div>
    @include('layouts.foot')
</body>

</html>

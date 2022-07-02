<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Paquetes turísticos para Perú | Travel Agency Tierras Vivas</title>
</head>

<body>
    @include('layouts.menu')
    <div class="paquetes">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Encuentra paquetes turísticos alrededor de Perú</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h2 class="h1-index">
                        <rojo>Paquetes turísticos Perú</rojo>
                    </h2>
                    <p class="p-salkantay">
                        ¿Conoce el Perú? Este es el mejor momento para visitarlo. Paquetes Perú ofrece viajes de
                        aventura y tradicional con mas tiempo para explorar y descubrir lo mejor de este pais. Pruebe un
                        ceviche Peruano o disfrute un almuerzo buffet en el Valle Sagrado de los Incas. Ascienda la
                        montaña de 7 colores o visite la ciudad perdida de los Incas – Machu Picchu. Viajes completos
                        para su vacaciones estan en este estilo de viaje. Reserve su proximo destino a Perú.
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours a Machu Picchu:</h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="paquetes/peru-aventurero-11-dias">
                            <img class="card-img-top" src="{{ asset('img/thumb/peru-aventurero-paquete-de-viajes.webp') }}"
                                alt="Tour en Perú por 11 días" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Perú Aventurero 11 Días</h5>
                            <p class="text-card">Perú Aventurero es un paquete de viajes a Perú. Sumerja sus
                                sentidos en los coloridos mercados...</p>
                            <a href="paquetes/peru-aventurero-11-dias" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="paquetes/cusco-magico-5-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                alt="Visita Cusco por 5 días" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cusco Mágico 5 Días</h5>
                            <p class="text-card">El tour de Cusco Machu Picchu es un paquete turístico preparado
                                para los viajeros que desean descubrir más de...</p>
                            <a href="paquetes/cusco-magico-5-dias" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="paquetes/machupicchu-3-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/machu-picchu-travel-tour.webp') }}"
                                alt="Card image cap" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Machu Picchu Magico 3 Dias</h5>
                            <p class="text-card">Durante estas vacaciones en Machu Picchu, puede disfrutar de una
                                visita guiada por la ciudad de Cusco...</p>
                            <a href="paquetes/machupicchu-3-dias" class="boton-card">Más detalles</a>
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
    <!-- Modal de banner-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form style="padding: 0px 25px">
                    @csrf
                    <h3 class="h3-book-pop-up">Reserva tu viaje a Perú</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" placeholder="David Miranda">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fa">Arrivo:</label>
                            <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fa">Salida:</label>
                            <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fa">Adultos:</label>
                            <input type="number" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="adults">Niños:</label>
                            <input type="number" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="child">Mensaje:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 2.8em"
                                placeholder="Message:"></textarea>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="boton-index">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.foot')
</body>

</html>

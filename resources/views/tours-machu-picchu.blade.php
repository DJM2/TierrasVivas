<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Tours a Machu Picchu</title>
</head>

<body>
    @include('layouts.menu')
    <div class="machu">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Tours a Machu picchu</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h2 class="h1-index">
                        <rojo>Caminatas & tours a Machu Picchu</rojo>
                    </h2>
                    <p class="p-salkantay">
                        Tierras Vivas ofrece viajes y paquetes turisticos a Machu Picchu. Nuestro objetivo es ofrecerte
                        un servicio perfectamente diseñado para satisfacer tus necesidades y hacer que tu viaje a Perú
                        sea una experiencia inolvidable, por eso te invitamos a nuestro sitio web, donde encontrarás
                        todo lo necesario para vivir el mundo real de Tierras Vivas.
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

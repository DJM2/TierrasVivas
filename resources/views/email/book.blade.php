<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Reservar viaje a Perú | Travel Agency Tierras Vivas en español</title>
    <meta name="description"
        content="Tierras Vivas es una agencia de viajes en Perú que tiene mas de 15 años de experiencia en el rubro turistico, dando siempre calidad de servicio con cada cliente." />
    <meta name="keywords"
        content="Viaja a Peru, conoce peru, reservar peru, como viajar a peru, como viajar a machu picchu, reservar machu picchu, book machu picchu, reservar tour a machu picchu, reservar cusco" />
    <meta property="og:image" content="" />
    <link rel="canonical" href="https://tierrasvivas.net" />
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<center>
						<img src="{{asset('img/Tierras-vivas-logo-email.png')}}" alt="Tierras Vivas Español" width="90px">
                    <h1 class="text-center">Solicitud de Formulario Tierras Vivas español</h1>
					
                    <p> Hola Tierras Vivas, Ud. acaba de recibir un nuevo mensaje desde la pagina web en español. Por
                        favor responder en la mayor brevedad posible. A continuacion los detalles del formulario:</p>
						</center>
                    <table class="table" style="text-align: left">
                        <thead>
							<tr>
                                <th scope="col">Tour:</th>
                                <td>{{$titulo}}</th>
                            </tr>
                            <tr>
                                <th scope="col">Email:</th>
                                <td>{{ $email }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Nombre:</th>
                                <td>{{ $name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Fecha de llegada:</th>
                                <td>{{ $da }}</td>
                            </tr>
                            </tr>
                            <tr>
                                <th scope="row">Adultos:</th>
                                <td>{{ $adultos }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Niños:</th>
                                <td>{{ $childs }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Mensaje:</th>
                                <td>{{ $mensaje }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Copyright© 2022 Tierras Vivas, Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

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
                        <img src="{{ asset('img/Tierras-vivas-logo-email.png') }}" alt="Tierras Vivas Español"
                            width="90px">
                        <h1 class="text-center">Solicitud de Formulario Tierras Vivas español</h1>

                        <p> Hola Tierras Vivas, Ud. acaba de recibir un nuevo mensaje desde la pagina web en español.
                            Por
                            favor responder en la mayor brevedad posible. A continuacion los detalles del formulario:
                        </p>
                    </center>
                    <h4 style="text-decoration: underline">Datos de Facturación</h4>
                    <table class="table" style="text-align: left">
                        <thead>
                            <tr>
                                <th scope="col">Nombre:</th>
                                <td>{{ $nombre }}</th>
                            </tr>
                            <tr>
                                <th scope="col">Email:</th>
                                <td>{{ $email }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Número de telefono:</th>
                                <td>{{ $telefono }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nacionalidad:</th>
                                <td>{{ $nacionalidad }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <h4 style="text-decoration: underline">Datos del Servicio:</h4>
                    <table class="table" style="text-align: left">
                        <tbody>
                            <tr>
                                <th scope="row">Tour: </th>
                                <td>{{ $tour }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Fecha de Inicio: </th>
                                <td>{{ $da }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Númro de personas: </th>
                                <td id="paxs">{{ $numeroPersonas }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tipo de Servicio: </th>
                                <td>{{ $tipoDeServicio }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <h4 style="text-decoration: underline">Datos de pasajeros:</h4>
                    <table class="table" style="text-align: left">
                        <tbody id="pasajeros">
                            <tr>
                                <th scope="row">Tour: </th>
                                <td>{{ $tour }}</td>
                            </tr>

                            <script>
                                var paxs = document.getElementById('paxs').value;
                                for (i = 0; i < paxs; i++) {
                                    n = i + 1;
                                    tr = document.createElement('tr');
                                    th=document.createElement('th');
                                    td=createElement('td');
                                    tr.textContent=th;
                                    tr.textContent=td;
                                    th.textContent={{$name}};
                                    td.textContent={{$file}};
                                }
                            </script>
                        </tbody>
                    </table>
                    <h4 style="text-decoration: underline">Precios:</h4>
                    <table class="table" style="text-align: left">
                        <tbody id="pasajeros">
                            <tr>
                                <th scope="row">Precio: </th>
                                <td>${{ $precio }}.00</td>
                            </tr>
                            <tr>
                                <th scope="row">Porcentaje a pagar: </th>
                                <script>
                                <script>
                                <td id="porcentaje">{{ $porcentaje }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Método de pago: </th>
                                <td>{{ $metodoPago }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Total a Pagar </th>
                                <td>{{ $precioTotal }}</td>
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

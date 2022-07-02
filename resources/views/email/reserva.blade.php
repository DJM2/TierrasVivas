<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    @include('layouts.estilos')
    <title>Reservar tour por Tierras Vivas español</title>
    <meta name="description"
        content="La proximidad de Cachicata a Machu Picchu hace que la caminata a su alrededor sea una alternativa atractiva al Camino Inca suscrito en exceso. Camino Inca" />
    <meta property="og:description"
        content="La proximidad de Cachicata a Machu Picchu hace que la caminata a su alrededor sea una alternativa atractiva al Camino Inca suscrito en exceso. Camino Inca" />
    <meta name="keywords"
        content="cachicata, camino inca, camino inca a machu pichu, cachicata tour, tour a cachicata, cachicata ubicacion, cachicata caminata" />
    <meta property="og:image" content="" />
    <link rel="canonical" href="https://tierrasvivas.net/aventura/cachicata-a-machu-picchu" />
</head>

<body>
    @include('layouts.menu-tours')
    <div class="reserva">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div style="padding-top: 2em"></div>
                    <h2>Formulario de reserva para: {{ $titulo }}</h2>
                    <h3>Precio: $<?php $precio = 250.0; echo $precio; ?></h3>
                    <br>
                    <form>
                        @csrf
                        <div class="form-row">
                            <!----------Datos de Facturación------------->
                            <div class="col-lg-12">
                                <h3>Datos de facturación:</h3>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" id="name"
                                    placeholder="Jhon Smith" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email:</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Jhon@gmail.com" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Telefono / WhatsApp:</label>
                                <input type="tel" name="telefono" class="form-control" id="name"
                                    placeholder="001 675 4356 67" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nacionalidad:</label>
                                <select class="custom-select" name="nacionalidad" required>
                                    <option value="">Seleccionar nacionalidad</option>
                                    <option value="AF"> Afghanistan </option>
                                    <option value="AL"> Albania </option>
                                    <option value="DZ"> Algeria </option>
                                    <option value="AS"> American Samoa </option>
                                    <option value="AD"> Andorra </option>
                                    <option value="AO"> Angola </option>
                                    <option value="AI"> Anguilla </option>
                                    <option value="AQ"> Antarctica </option>
                                    <option value="AG"> Antigua and Barbuda </option>
                                    <option value="AR"> Argentina </option>
                                    <option value="AM"> Armenia </option>
                                    <option value="AW"> Aruba </option>
                                    <option value="AU"> Australia </option>
                                    <option value="AT"> Austria </option>
                                    <option value="AZ"> Azerbaijan </option>
                                    <option value="BS"> Bahamas </option>
                                    <option value="BH"> Bahrain </option>
                                    <option value="BD"> Bangladesh </option>
                                    <option value="BB"> Barbados </option>
                                    <option value="BY"> Belarus </option>
                                    <option value="BE"> Belgium </option>
                                    <option value="BZ"> Belize </option>
                                    <option value="BJ"> Benin </option>
                                    <option value="BM"> Bermuda </option>
                                    <option value="BT"> Bhutan </option>
                                    <option value="BO"> Bolivia </option>
                                    <option value="BA"> Bosnia and Herzegovina </option>
                                    <option value="BW"> Botswana </option>
                                    <option value="BV"> Bouvet Island </option>
                                    <option value="BR"> Brazil </option>
                                    <option value="IO"> British Indian Ocean Territory </option>
                                    <option value="BN"> Brunei Darussalam </option>
                                    <option value="BG"> Bulgaria </option>
                                    <option value="BF"> Burkina Faso </option>
                                    <option value="BI"> Burundi </option>
                                    <option value="KH"> Cambodia </option>
                                    <option value="CM"> Cameroon </option>
                                    <option value="CA"> Canada </option>
                                    <option value="CV"> Cape Verde </option>
                                    <option value="KY"> Cayman Islands </option>
                                    <option value="CF"> Central African Republic </option>
                                    <option value="TD"> Chad </option>
                                    <option value="CL"> Chile </option>
                                    <option value="CN"> China </option>
                                    <option value="CX"> Christmas Island </option>
                                    <option value="CC"> Cocos (Keeling) Islands </option>
                                    <option value="CO"> Colombia </option>
                                    <option value="KM"> Comoros </option>
                                    <option value="CG"> Congo </option>
                                    <option value="CD"> Congo, the Democratic Republic of the </option>
                                    <option value="CK"> Cook Islands </option>
                                    <option value="CR"> Costa Rica </option>
                                    <option value="HR"> Croatia </option>
                                    <option value="CU"> Cuba </option>
                                    <option value="CY"> Cyprus </option>
                                    <option value="CZ"> Czech Republic </option>
                                    <option value="DK"> Denmark </option>
                                    <option value="DJ"> Djibouti </option>
                                    <option value="DM"> Dominica </option>
                                    <option value="DO"> Dominican Republic </option>
                                    <option value="EC"> Ecuador </option>
                                    <option value="EG"> Egypt </option>
                                    <option value="SV"> El Salvador </option>
                                    <option value="GQ"> Equatorial Guinea </option>
                                    <option value="ER"> Eritrea </option>
                                    <option value="EE"> Estonia </option>
                                    <option value="ET"> Ethiopia </option>
                                    <option value="FK"> Falkland Islands (Malvinas) </option>
                                    <option value="FO"> Faroe Islands </option>
                                    <option value="FJ"> Fiji </option>
                                    <option value="FI"> Finland </option>
                                    <option value="FR"> France </option>
                                    <option value="GF"> French Guiana </option>
                                    <option value="PF"> French Polynesia </option>
                                    <option value="TF"> French Southern Territories </option>
                                    <option value="GA"> Gabon </option>
                                    <option value="GM"> Gambia </option>
                                    <option value="GE"> Georgia </option>
                                    <option value="DE"> Germany </option>
                                    <option value="GH"> Ghana </option>
                                    <option value="GI"> Gibraltar </option>
                                    <option value="GR"> Greece </option>
                                    <option value="GL"> Greenland </option>
                                    <option value="GD"> Grenada </option>
                                    <option value="GP"> Guadeloupe </option>
                                    <option value="GU"> Guam </option>
                                    <option value="GT"> Guatemala </option>
                                    <option value="GN"> Guinea </option>
                                    <option value="GW"> Guinea-Bissau </option>
                                    <option value="GY"> Guyana </option>
                                    <option value="HT"> Haiti </option>
                                    <option value="HM"> Heard Island and Mcdonald Islands </option>
                                    <option value="VA"> Holy See (Vatican City State) </option>
                                    <option value="HN"> Honduras </option>
                                    <option value="HK"> Hong Kong </option>
                                    <option value="HU"> Hungary </option>
                                    <option value="IS"> Iceland </option>
                                    <option value="IN"> India </option>
                                    <option value="ID"> Indonesia </option>
                                    <option value="IR"> Iran, Islamic Republic of </option>
                                    <option value="IQ"> Iraq </option>
                                    <option value="IE"> Ireland </option>
                                    <option value="IL"> Israel </option>
                                    <option value="IT"> Italy </option>
                                    <option value="CI"> Ivory Coast </option>
                                    <option value="JM"> Jamaica </option>
                                    <option value="JP"> Japan </option>
                                    <option value="JO"> Jordan </option>
                                    <option value="KZ"> Kazakhstan </option>
                                    <option value="KE"> Kenya </option>
                                    <option value="KI"> Kiribati </option>
                                    <option value="KP"> Korea, Democratic People's Republic of </option>
                                    <option value="KR"> Korea, Republic of </option>
                                    <option value="KW"> Kuwait </option>
                                    <option value="KG"> Kyrgyzstan </option>
                                    <option value="LA"> Lao People's Democratic Republic </option>
                                    <option value="LV"> Latvia </option>
                                    <option value="LB"> Lebanon </option>
                                    <option value="LS"> Lesotho </option>
                                    <option value="LR"> Liberia </option>
                                    <option value="LY"> Libyan Arab Jamahiriya </option>
                                    <option value="LI"> Liechtenstein </option>
                                    <option value="LT"> Lithuania </option>
                                    <option value="LU"> Luxembourg </option>
                                    <option value="MO"> Macao </option>
                                    <option value="MK"> Macedonia, the Former Yugoslav Republic of </option>
                                    <option value="MG"> Madagascar </option>
                                    <option value="MW"> Malawi </option>
                                    <option value="MY"> Malaysia </option>
                                    <option value="MV"> Maldives </option>
                                    <option value="ML"> Mali </option>
                                    <option value="MT"> Malta </option>
                                    <option value="MH"> Marshall Islands </option>
                                    <option value="MQ"> Martinique </option>
                                    <option value="MR"> Mauritania </option>
                                    <option value="MU"> Mauritius </option>
                                    <option value="YT"> Mayotte </option>
                                    <option value="MX"> Mexico </option>
                                    <option value="FM"> Micronesia, Federated States of </option>
                                    <option value="MD"> Moldova, Republic of </option>
                                    <option value="MC"> Monaco </option>
                                    <option value="MN"> Mongolia </option>
                                    <option value="MS"> Montserrat </option>
                                    <option value="MA"> Morocco </option>
                                    <option value="MZ"> Mozambique </option>
                                    <option value="MM"> Myanmar </option>
                                    <option value="NA"> Namibia </option>
                                    <option value="NR"> Nauru </option>
                                    <option value="NP"> Nepal </option>
                                    <option value="NL"> Netherlands </option>
                                    <option value="AN"> Netherlands Antilles </option>
                                    <option value="NC"> New Caledonia </option>
                                    <option value="NZ"> New Zealand </option>
                                    <option value="NI"> Nicaragua </option>
                                    <option value="NE"> Niger </option>
                                    <option value="NG"> Nigeria </option>
                                    <option value="NU"> Niue </option>
                                    <option value="NF"> Norfolk Island </option>
                                    <option value="MP"> Northern Mariana Islands </option>
                                    <option value="NO"> Norway </option>
                                    <option value="OM"> Oman </option>
                                    <option value="PK"> Pakistan </option>
                                    <option value="PW"> Palau </option>
                                    <option value="PS"> Palestinian Territory, Occupied </option>
                                    <option value="PA"> Panama </option>
                                    <option value="PG"> Papua New Guinea </option>
                                    <option value="PY"> Paraguay </option>
                                    <option value="PE"> Peru </option>
                                    <option value="PH"> Philippines </option>
                                    <option value="PN"> Pitcairn </option>
                                    <option value="PL"> Poland </option>
                                    <option value="PT"> Portugal </option>
                                    <option value="PR"> Puerto Rico </option>
                                    <option value="QA"> Qatar </option>
                                    <option value="RE"> Reunion </option>
                                    <option value="RO"> Romania </option>
                                    <option value="RU"> Russian Federation </option>
                                    <option value="RW"> Rwanda </option>
                                    <option value="SH"> Saint Helena </option>
                                    <option value="KN"> Saint Kitts and Nevis </option>
                                    <option value="LC"> Saint Lucia </option>
                                    <option value="PM"> Saint Pierre and Miquelon </option>
                                    <option value="VC"> Saint Vincent and the Grenadines </option>
                                    <option value="WS"> Samoa </option>
                                    <option value="SM"> San Marino </option>
                                    <option value="ST"> Sao Tome and Principe </option>
                                    <option value="SA"> Saudi Arabia </option>
                                    <option value="SN"> Senegal </option>
                                    <option value="CS"> Serbia and Montenegro </option>
                                    <option value="SC"> Seychelles </option>
                                    <option value="SL"> Sierra Leone </option>
                                    <option value="SG"> Singapore </option>
                                    <option value="SK"> Slovakia </option>
                                    <option value="SI"> Slovenia </option>
                                    <option value="SB"> Solomon Islands </option>
                                    <option value="SO"> Somalia </option>
                                    <option value="ZA"> South Africa </option>
                                    <option value="GS"> South Georgia and the South Sandwich Islands </option>
                                    <option value="ES"> Spain </option>
                                    <option value="LK"> Sri Lanka </option>
                                    <option value="SD"> Sudan </option>
                                    <option value="SR"> Suriname </option>
                                    <option value="SJ"> Svalbard and Jan Mayen </option>
                                    <option value="SZ"> Swaziland </option>
                                    <option value="SE"> Sweden </option>
                                    <option value="CH"> Switzerland </option>
                                    <option value="SY"> Syrian Arab Republic </option>
                                    <option value="TW"> Taiwan, Province of China </option>
                                    <option value="TJ"> Tajikistan </option>
                                    <option value="TZ"> Tanzania, United Republic of </option>
                                    <option value="TH"> Thailand </option>
                                    <option value="TL"> Timor-Leste </option>
                                    <option value="TG"> Togo </option>
                                    <option value="TK"> Tokelau </option>
                                    <option value="TO"> Tonga </option>
                                    <option value="TT"> Trinidad and Tobago </option>
                                    <option value="TN"> Tunisia </option>
                                    <option value="TR"> Turkey </option>
                                    <option value="TM"> Turkmenistan </option>
                                    <option value="TC"> Turks and Caicos Islands </option>
                                    <option value="TV"> Tuvalu </option>
                                    <option value="UG"> Uganda </option>
                                    <option value="UA"> Ukraine </option>
                                    <option value="AE"> United Arab Emirates </option>
                                    <option value="GB"> United Kingdom </option>
                                    <option value="US"> United States </option>
                                    <option value="UM"> United States Minor Outlying Islands </option>
                                    <option value="UY"> Uruguay </option>
                                    <option value="UZ"> Uzbekistan </option>
                                    <option value="VU"> Vanuatu </option>
                                    <option value="VE"> Venezuela </option>
                                    <option value="VN"> Viet Nam </option>
                                    <option value="VG"> Virgin Islands, British </option>
                                    <option value="VI"> Virgin Islands, U.s. </option>
                                    <option value="WF"> Wallis and Futuna </option>
                                    <option value="EH"> Western Sahara </option>
                                    <option value="YE"> Yemen </option>
                                    <option value="ZM"> Zambia </option>
                                    <option value="ZW"> Zimbabwe </option>
                                </select>
                            </div>
                            <div class="espacio"></div>
                            <!----------Datos del servicio-------------->
                            <div class="col-lg-12">
                                <h3>Datos del servicio:</h3>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Tour:</label>
                                <input type="email" class="form-control" id="tour"
                                    value="{{ $titulo }}" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Fecha de inicio:</label>
                                <input type="date" name="fi" class="form-control" id="inputPassword4">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Número de personas:</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="personas" onchange="cantidad();">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Tipo de servicio:</label>
                                <select class="custom-select">
                                    <option value="Grupo">En grupo</option>
                                    <option value="Privado">Privado</option>
                                </select>
                            </div>
                            <div class="espacio"></div>
                            <!----------Datos del Grupo------------->
                            <div class="col-lg-12">
                                <h3>Datos del grupo:</h3>
                                <div id="elementos" class="form-row"></div>

                                <script>
                                    function cantidad() {
                                        var pasajeros = document.getElementById('personas').value;
                                        
                                        for (i = 0; i < pasajeros; i++) {
                                            n = i + 1;
                                            div = document.createElement('div'); 

                                            div2 = document.createElement('div');
                                            div2.classList.add('form-group');
                                            div2.classList.add('col-md-6');

                                            label2 = document.createElement('label');
                                            label2.textContent = 'Nombre: ';
                                            input2 = document.createElement('input');
                                            input2.classList.add('form-control');
                                            input2.placeholder = 'Escriba acá su nombre:';
                                            input2.setAttribute('name', 'name');

                                            div2.appendChild(label2);
                                            div2.appendChild(input2);

                                            div3 = document.createElement('div');
                                            div3.classList.add('form-group');
                                            div3.classList.add('col-md-4');

                                            label3 = document.createElement('label');
                                            label3.textContent = 'Subir foto de Pasaporte: ';
                                            input3 = document.createElement('input');
                                            input3.classList.add('form-select');
                                            input3.setAttribute('name', 'file');
                                            input3.type = "file";

                                            div3.appendChild(label3);
                                            div3.appendChild(input3);

                                            elementos = document.getElementById('elementos');
                                            elementos.appendChild(div);
                                            elementos.appendChild(div2);
                                            elementos.appendChild(div3);
                                        }
                                    }
                                </script>
                            </div>
                            <div class="espacio"></div>

                            <!----------Precio--------------->
                            <div class="col-lg-12">
                                <h3>Precios:</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Precio:</th>
                                            <td id="precio" class="icon-dollar"> <?php echo $precio; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Porcentaje a pagar:</th>
                                            <td>
                                                <select class="custom-select" id="porcentaje"
                                                    onchange="seleccionarPorcentaje();">
                                                    <option value="0.2">20%</option>
                                                    <option value="0.5">50%</option>
                                                    <option value="100">100%</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Método de pago:</th>
                                            <td>
                                                <select class="custom-select">
                                                    <option value="Grupo">Visa</option>
                                                    <option value="Privado">MasterCard</option>
                                                    <option value="Privado">Transferencia Bancaria</option>
                                                    <option value="Privado">Wester Union</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total:</th>
                                            <td id="precioTotal">
                                                <script>
                                                    function seleccionarPorcentaje() {
                                                        precio = document.getElementById('precio').innerHTML;
                                                        porcentaje = document.getElementById('porcentaje').value;
                                                        if (porcentaje == 100) {
                                                            precioTotal = document.getElementById('precioTotal').innerText = '$' + precio;
                                                        } else {
                                                            sacandoPorcentaje = precio * porcentaje;
                                                            precioTotal = document.getElementById('precioTotal').innerText = '$' + sacandoPorcentaje;
                                                        }
                                                    }
                                                </script>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group col-md-12">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1" required>
                                    <a target="_blank" href="{{route('terminos')}}">He leído y estoy de acuerdo con los términos y condiciones</a>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary text-center">Registar y pagar</button>
                    </form>
                    <div style="padding-bottom: 2em"></div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.foot')
</body>

</html>

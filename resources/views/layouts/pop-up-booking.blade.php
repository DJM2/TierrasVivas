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
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" placeholder="David Miranda">
                </div>
                <div class="form-group col-md-6">
                    <label for="fa">Arrivo:</label>
                    <input type="date" class="form-control" name="da">
                </div>
                <div class="form-group col-md-6">
                    <label for="tour">Eliga su Tour:</label>
                    <select name="tour" class="form-control">
                        <option value="Cachicata a Machu Picchu">Cachicata a Machu Picchu</option>
                        <option value="Caminata a Choquequirao 4 días">Caminata a Choquequirao 4 días</option>
                        <option value="Camino Inca 4 días">Camino Inca 4 días</option>
                        <option value="Camino Inca campamento 2 días">Camino Inca con campamento 2 días</option>
                        <option value="Camino Inca corto 2 días">Camino Inca corto de 2 días</option>
                        <option value="Huchuy Qosqo a Machu Picchu 2 días">Huchuy Qosqo a Machu Picchu 2 días</option>
                        <option value="Inca Jungle a Machu Picchu">Inca Jungle a Machu Picchu 4 días</option>
                        <option value="Lares trek 4 días">Lares a Machu Picchu 4 días</option>
                        <option value="Caminata de Salkantay a Machu Picchu 4 días">Caminata de Salkantay a Machu Picchu 4 días</option>
                        <option value="Caminata de Salkantay a Machu Picchu 5 días">Caminata de Salkantay a Machu Picchu 5 días</option>
                        <option value="City tour en Cusco">City tour en Cusco</option>
                        <option value="Excursión al Valle Sagrado">Excursión al Valle Sagrado de los Incas</option>
                        <option value="Maras, Moray & Salineras con cuatrimotos">Maras, Moray & Salineras con cuatrimotos</option>
                        <option value="Tour a la laguna Humantay">Tour a la laguna Humantay</option>
                        <option value="Tour al Valle Sagrado de los Incas">Tour al Valle Sagrado de los Incas</option>
                        <option value="Tour a Vinicunca">Tour a la montaña de colores</option>
                        <option value="Machu Pïcchu en carro 2 días">Machu Pïcchu en carro 2 días</option>
                        <option value="Machu Picchu en 1 día">Machu Picchu en 1 día</option>
                        <option value="Machu Picchu en 2 días">Machu Pïcchu en 2 días</option>
                        <option value="Machu Pïcchu en 3 días">Machu Pïcchu en 3 días</option>
                        <option value="Valle Sagrado y Machu Picchu 2 días">Valle Sagrado y Machu Picchu 2 días</option>
                        <option value="Cusco mágico 5 días">Cusco mágico, tour de 5 días</option>
                        <option value="Perú aventurero por 11 días">Perú aventurero por 11 días</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="fa">Adultos:</label>
                    <input type="number" class="form-control" name="adultos" placeholder="Cantidad">
                </div>
                <div class="form-group col-md-6">
                    <label for="adults">Niños:</label>
                    <input type="number" class="form-control" name="childs" placeholder="Cantidad">
                </div>
                <div class="form-group col-md-12">
                    <label for="child">Mensaje:</label>
                    <textarea class="form-control" name="mensaje" rows="3" style="height: 2.8em"
                        placeholder="Mensage:"></textarea>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="boton-index">Enviar</button>
            </div>
        </form>
    </div>
</div>
</div>
<!-- Fin Modal de banner-->
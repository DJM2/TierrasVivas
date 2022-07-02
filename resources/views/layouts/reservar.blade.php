<div class="sticky">
    <!-----------Boton de reservar--------->
    <form action="{{ route('reserva', ['titulo' => $titulo]) }}" method="GET">
        @csrf
        <input class="btn-reservar" value="Reservar" type="submit">
    </form>

    <!-----Solicitar Información------------->
    <form class="form-row book-tours" method="POST"  action="{{ route('mensaje01') }}">
		 @csrf
        <h4 class="form-group col-md-12">Solicitar información</h4>
		
        <div class="form-group col-md-12">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                placeholder="Ingresar Email:" required>
        </div>
        <div class="form-group col-md-12">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" required>
        </div>
        <div class="form-group col-md-12">
            <label for="da">Fecha de Llegada:</label>
            <input type="date" class="form-control" name="da">
        </div>
        <div class="form-group col-md-12">
            <label for="tour">Tour:</label>
			<input type="text" class="form-control" name="titulo" readonly value="{{$titulo}}">
        </div>
        <div class="form-group col-md-6">
            <label for="adultos">Adultos:</label>
            <input type="number" class="form-control" name="adultos" placeholder="Cantidad">
        </div>
        <div class="form-group col-md-6">
            <label for="childs">Niños:</label>
            <input type="number" class="form-control" name="childs" placeholder="Cantidad">
        </div>
        <div class="form-group col-md-12">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" name="mensaje" placeholder="Escriba acá su mensaje" required></textarea>
        </div>
        <div class="form-group col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form> 
</div>
<?php

use App\Http\Controllers\MensajesController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\MensajeMailable;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('index');});
Route::get('destinos-peru', function () {return view('destinos-peru');});
Route::get('tours-de-aventura-peru', function () {return view('tours-de-aventura-peru');});
Route::get('tours-imperdibles-en-peru', function () {return view('tours-imperdibles-en-peru');})->name('imperdibles');
Route::get('tours-machu-picchu', function () {return view('tours-machu-picchu');})->name('tours-machu-picchu');
Route::get('paquetes-turisticos-peru', function () {return view('paquetes-turisticos-peru');});
Route::get('blog-peru', function () {return view('blog-peru');});
Route::get('terminos-y-condiciones', function () {return view('terminos-y-condiciones');})->name('terminos');

/*Destinos*/
Route::get('destinos/camino-inca-cantera-peru', function () {return view('destinos/camino-inca-cantera-peru');});
Route::get('destinos/lago-titicaca-peru', function () {return view('destinos/lago-titicaca-peru');});
Route::get('destinos/puno', function () {return view('destinos/puno');})->name('puno');
Route::get('destinos/colca-canyon', function () {return view('destinos/colca-canyon');})->name('colca-canyon');
Route::get('destinos/vilcabamba', function () {return view('destinos/vilcabamba');});
Route::get('destinos/llactapata', function () {return view('destinos/llactapata');});
Route::get('destinos/valle-sagrado-de-los-incas', function () {return view('destinos/valle-sagrado-de-los-incas');});
Route::get('destinos/selva-amazonica-peru', function () {return view('destinos/selva-amazonica-peru');});
Route::get('destinos/lares', function () {return view('destinos/lares');})->name('lares');
Route::get('destinos/lineas-de-nazca-peru', function () {return view('destinos/lineas-de-nazca-peru');});
Route::get('destinos/lima', function () {return view('destinos/lima');})->name('lima');
Route::get('destinos/cusco-ombligo-del-mundo', function () {return view('destinos/cusco-ombligo-del-mundo');});
Route::get('destinos/ollantaytambo', function () {return view('destinos/ollantaytambo');})->name('ollantaytambo');
Route::get('destinos/apu-salkantay', function () {return view('destinos/apu-salkantay');})->name('salkantay');
Route::get('destinos/machu-picchu', function () {return view('destinos/machu-picchu');})->name('machupicchu');
Route::get('destinos/camino-inca-a-machu-picchu', function () {return view('destinos/camino-inca-a-machu-picchu');});

/*Aventura*/
Route::get('aventura/cachicata-a-machu-picchu', function () {return view('aventura/cachicata-a-machu-picchu');});
Route::get('aventura/caminata-a-choquequirao-4-dias', function () {return view('aventura/caminata-a-choquequirao-4-dias');});
Route::get('aventura/camino-inca-campamento-2-dias', function () {return view('aventura/camino-inca-campamento-2-dias');});
Route::get('aventura/camino-inca-corto-2-dias', function () {return view('aventura/camino-inca-corto-2-dias');});
Route::get('aventura/camino-inca-4-dias', function () {return view('aventura/camino-inca-4-dias');})->name('camino-inca-4-dias');
Route::get('aventura/huchuy-qosqo-a-machu-picchu', function () {return view('aventura/huchuy-qosqo-a-machu-picchu');});
Route::get('aventura/inca-jungle-a-machu-picchu', function () {return view('aventura/inca-jungle-a-machu-picchu');})->name('inca-jungle-machu-picchu');
Route::get('aventura/lares-trek-machu-picchu', function () {return view('aventura/lares-trek-machu-picchu');});
Route::get('aventura/salkantay-trek-a-machu-picchu-4-dias', function () {return view('aventura/salkantay-trek-a-machu-picchu-4-dias');});
Route::get('aventura/salkantay-trek-a-machu-picchu-5-dias', function () {return view('aventura/salkantay-trek-a-machu-picchu-5-dias');})->name('salkantay-5-dias');

/*Imperdibles*/
Route::get('imperdibles/excursion-al-valle-sagrado-vip', function () {return view('imperdibles/excursion-al-valle-sagrado-vip');});
Route::get('imperdibles/tour-a-la-laguna-humantay', function () {return view('imperdibles/tour-a-la-laguna-humantay');});
Route::get('imperdibles/vinicunca-7-colores', function () {return view('imperdibles/vinicunca-7-colores');});
Route::get('imperdibles/city-tour-en-cusco-peru', function () {return view('imperdibles/city-tour-en-cusco-peru');});
Route::get('imperdibles/maras-y-salineras-cuatrimoto', function () {return view('imperdibles/maras-y-salineras-cuatrimoto');});
Route::get('imperdibles/tour-al-valle-sagrado-peru', function () {return view('imperdibles/tour-al-valle-sagrado-peru');});

/*Tours a Machu Picchu*/
Route::get('machupicchu/tour-a-machu-picchu-1-dia', function () {return view('machupicchu/tour-a-machu-picchu-1-dia');});
Route::get('machupicchu/tour-machu-picchu-2-dias', function () {return view('machupicchu/tour-machu-picchu-2-dias');});
Route::get('machupicchu/machu-picchu-en-carro-2-dias', function () {return view('machupicchu/machu-picchu-en-carro-2-dias');});
Route::get('machupicchu/valle-sagrado-a-machu-picchu', function () {return view('machupicchu/valle-sagrado-a-machu-picchu');})->name('valle-sagrado-machu-picchu');

/*Paquetes Perú*/
Route::get('paquetes/peru-aventurero-11-dias', function () {return view('paquetes/peru-aventurero-11-dias');})->name('peru-aventurero');
Route::get('paquetes/cusco-magico-5-dias', function () {return view('paquetes/cusco-magico-5-dias');});
Route::get('paquetes/machupicchu-3-dias', function () {return view('paquetes/machupicchu-3-dias');});

/*Blog*/
Route::get('blog/runkurakay', function () {return view('blog/runkurakay');});
Route::get('blog/dios-sol-inti', function () {return view('blog/dios-sol-inti');});
Route::get('blog/Phuyupatamarca', function () {return view('blog/Phuyupatamarca');});
Route::get('blog/chachabamba', function () {return view('blog/chachabamba');});
Route::get('blog/turismo-mistico-en-cusco', function () {return view('blog/turismo-mistico-en-cusco');});
Route::get('blog/patallacta', function () {return view('blog/patallacta');});
Route::get('blog/14-atracciones-turisticas-en-cusco', function () {return view('blog/14-atracciones-turisticas-en-cusco');});
Route::get('blog/orquideas-en-machu-picchu', function () {return view('blog/orquideas-en-machu-picchu');});
Route::get('blog/5-consejos-para-hacer-camino-inca', function () {return view('blog/5-consejos-para-hacer-camino-inca');});
Route::get('blog/los-mejores-telefonos-inteligentes-de-viaje', function () {return view('blog/los-mejores-telefonos-inteligentes-de-viaje');});
Route::get('blog/consejos-de-viaje-a-machu-picchu', function () {return view('blog/consejos-de-viaje-a-machu-picchu');});
Route::get('blog/coronavirus-cierre-de-machu-picchu', function () {return view('blog/coronavirus-cierre-de-machu-picchu');});
Route::get('blog/km-82-camino-inca', function () {return view('blog/km-82-camino-inca');});
Route::get('blog/chinchero-cusco', function () {return view('blog/chinchero-cusco');})->name('chinchero');
Route::get('blog/como-comprar-tickets-a-machu-picchu', function () {return view('blog/como-comprar-tickets-a-machu-picchu');})->name('comprar-tickets-machu-picchu');


/*Reservar*/
Route::get('/{titulo}', function($titulo=null){
    return view('email.reserva', compact('titulo'));
})->name('reserva');

//Formularios
Route::post('mensaje01', function(){ 
    $datos=request()->all();
    Mail::send("email.book", $datos, function($message) use($datos){
        $message->from($datos['email'], $datos['name'])
        ->to('info@tierrasvivas.com', 'DJM2')
        ->subject('Envio de formulario desde la página web.');
    });
    return back()->with('flash', 'Su mensaje fué enviado correctamente!');
})->name('mensaje01');

Route::post('mensaje-index', function(){ 
    $datos=request()->all();
    Mail::send("email.book-index", $datos, function($message) use($datos){
        $message->from($datos['email'], $datos['nombre'])
        ->to('info@tierrasvivas.com', 'DJM2')
        ->subject('Envio de formulario desde la página web.');
    });
    return back()->with('flash', 'Su mensaje fué enviado correctamente!');
})->name('mensaje-index');

Route::post('mensaje-popup', function(){ 
    $datos=request()->all();
    Mail::send("email.popup", $datos, function($message) use($datos){
        $message->from($datos['email'], $datos['name'])
        ->to('info@tierrasvivas.com', 'DJM2')
        ->subject('Envio de formulario desde la página web.');
    });
    return back()->with('flash', 'Su mensaje fué enviado correctamente!');
})->name('mensaje-popup');


//Reservas:
Route::post('reservas', function(){ 
    $datos=request()->all();
    Mail::send("email.emitir-reserva", $datos, function($message) use($datos){
        $message->from($datos['email'], $datos['nombre'])
        ->to('mirandadjmdjm@gmail.com', 'DJM2')
        ->subject('Envio de formulario desde la página web.');
    });
    return back()->with('flash', 'Su mensaje fué enviado correctamente!');
})->name('reservas');

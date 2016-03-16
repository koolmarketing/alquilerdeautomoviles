<?php


Route::get('/', function () {  return view('home');  });
Route::get('nosotros/', function () {  return view('nosotros');  });
Route::get('servicios/', function () {  return view('servicios');  });
Route::get('alquiler/', function () {  return view('alquiler');  });
Route::get('terminos-y-condiciones/', function () {  return view('terminos_legales');  });

Route::get('postular', function () {  return view('postular')->with('status', 'nuevo');  });

Route::post('postular', ['uses' => 'carrosController@store', 'as' => 'postular_carro']);


Route::get('servicios_complementarios/', function () {  return view('alquiler');  });

Route::get('carro/', function () {  return view('carro');  });

Route::get('contacto/', function () {  return view('contacto')->with('status', 'nuevo');  });

Route::get('contratarvehiculo/',function () {  return view('contratarvehiculo')->with('status', 'nuevo');  });

Route::get('servicioscomplementarios/', function () {  return view('servicioscomplementarios');  });

Route::post('contactopersona', ['uses' => 'carrosController@contactoPersona', 'as' => 'contaco_persona']);

Route::post('cotizacionpersona', ['uses' => 'carrosController@cotizacionpersona', 'as' => 'cotizacionpersona']);

Route::post('cotizacionempresa', ['uses' => 'carrosController@cotizacionempresa', 'as' => 'cotizacionempresa']);




Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/listadecarros', 'HomeController@ListadoCarros');

    Route::get('/vercarro/{id}', 'HomeController@VerCarro');

    Route::get('/editarcarro/{id}', 'HomeController@EditarCarro');

    Route::put('/editarcarro/{id}', 'HomeController@update');

    Route::get('/eliminarcarro/{id}', 'HomeController@delete');

    Route::get('/desactivarcarro/{id}', 'HomeController@desactivar');

    Route::get('/activarcarro/{id}', 'HomeController@activar');



});

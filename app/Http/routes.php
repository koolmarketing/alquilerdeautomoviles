<?php


Route::get('/', function () {  return view('home');  });
Route::get('nosotros/', function () {  return view('nosotros');  });
Route::get('servicios/', function () {  return view('servicios');  });
Route::get('alquiler/', function () {  return view('alquiler');  });

Route::get('postular', function () {  return view('postular')->with('status', 'nuevo');  });

Route::post('postular', ['uses' => 'carrosController@store', 'as' => 'postular_carro']);


Route::get('servicios_complementarios/', function () {  return view('alquiler');  });

Route::get('carro/', function () {  return view('carro');  });

Route::get('contacto/', function () {  return view('contacto');  });

Route::get('contratarvehiculo/', function () {  return view('contratarvehiculo');  });




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

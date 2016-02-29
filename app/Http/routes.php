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



Route::group(['middleware' => ['web']], function () {
    //
});

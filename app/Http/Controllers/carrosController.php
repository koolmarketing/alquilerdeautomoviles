<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
use App\Carros;
use Storage;
use Mail;
Use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use phpmailer;

class carrosController extends Controller
{

	// public function registrarPostulacion(Request $request, $id){
	// 	$carros = new Carros;
	// }


	public function store(Request $request)
	{
		$carro = new App\Carros;

		$foto_1=$request->file('foto_1');
		$foto_2=$request->file('foto_2');
		$foto_3=$request->file('foto_3');

		// Documentos

		$soat=$request->file('soat');
		$rodamiento=$request->file('rodamiento');
		$tecnico_mecanica=$request->file('tecnico_mecanica');
		$tarjeta_propiedad=$request->file('tarjeta_propiedad');
		$cedula_ciudadania=$request->file('cedula_ciudadania');



		$destinationPath = 'uploads/img/';

		if ($request->hasFile('foto_1')) {

			$file = $request->file('foto_1');
			$destinationPath = 'uploads/img';
			$extension = $file->getClientOriginalExtension();
			$filename1 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename1);			
			
		}

		if ($request->hasFile('foto_2')) {

			$file = $request->file('foto_2');
			$destinationPath = 'uploads/img';
			$extension = $file->getClientOriginalExtension();
			$filename2 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename2);

			
		}

		if ($request->hasFile('foto_3')) {

			$file = $request->file('foto_3');
			$destinationPath = 'uploads/img';
			$extension = $file->getClientOriginalExtension();
			$filename3 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename3);

		}

		if ($request->hasFile('soat')) {

			$file = $request->file('soat');
			$destinationPath = 'uploads/img';
			$extension = $file->getClientOriginalExtension();
			$filename4 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename4);

		}

		if ($request->hasFile('rodamiento')) {

			$file = $request->file('rodamiento');
			$destinationPath = 'uploads/img';
			$extension = $file->getClientOriginalExtension();
			$filename5 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename5);

		}

		if ($request->hasFile('tecnico_mecanica')) {

			$file = $request->file('tecnico_mecanica');
			$destinationPath = 'uploads/img';
			$extension = $file->getClientOriginalExtension();
			$filename6 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename6);

		}

		if ($request->hasFile('tarjeta_propiedad')) {

			$file = $request->file('tarjeta_propiedad');
			$destinationPath = 'uploads/img';
			$extension = $file->getClientOriginalExtension();
			$filename7 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename7);

		}



		if ($request->hasFile('cedula_ciudadania')) {

			$file = $request->file('cedula_ciudadania');
			$destinationPath = 'uploads/img';
			$extension = $file->getClientOriginalExtension();
			$filename8 = "".str_random(12).".".$extension."";
			$upload_success = $file->move($destinationPath, $filename8);

		}


		$carro->propietario   = $request->input('propietario');
		$carro->email         = $request->input('email');
		$carro->telefono_fijo = $request->input('telefono_fijo');
		$carro->celular       = $request->input('celular');
		$carro->actividad     = $request->input('actividad');
		$carro->ciudad        = $request->input('ciudad');
		$carro->direccion     = $request->input('direccion');
		$carro->marca         = $request->input('marca');
		$carro->linea         = $request->input('linea');
		$carro->modelo        = $request->input('modelo');
		$carro->color         = $request->input('color');
		$carro->placa         = $request->input('placa');
		$carro->transmision   = $request->input('transmision');
		$carro->combustible   = $request->input('combustible');
		$carro->carroceria    = $request->input('carroceria');
		$carro->pasajeros     = $request->input('pasajeros');
		$carro->precio_dia    = $request->input('precio_dia');
		/* Fotos  */
		if (isset($filename1)) { $carro->foto_1= $filename1;}
		if (isset($filename2)) { $carro->foto_2= $filename2;}
		if (isset($filename3)) { $carro->foto_3= $filename3;}

		if (isset($filename4)) { $carro->soat= $filename4;}
		if (isset($filename5)) { $carro->rodamiento= $filename5;}
		if (isset($filename6)) { $carro->tecnico_mecanica= $filename6;}
		if (isset($filename7)) { $carro->tarjeta_propiedad= $filename7;}
		if (isset($filename8)) { $carro->cedula_ciudadania= $filename8;}

		$carro->observaciones      = $request->input('observaciones');
		$carro->aire_acondicionado = $request->input('aire_acondicionado');
		$carro->_4x4               = $request->input('_4x4');
		$carro->freno_abs          = $request->input('freno_abs');
		$carro->cojineria_cuero    = $request->input('cojineria_cuero');
		$carro->mascotas           = $request->input('mascotas');
		$carro->entrega_domicilio  = $request->input('entrega_domicilio');
		$carro->airbag_conductor   = $request->input('airbag_conductor');
		$carro->airbag_copiloto    = $request->input('airbag_copiloto');
		$carro->radio              = $request->input('radio');
		$carro->cd_mp3             = $request->input('cd_mp3');
		$carro->usb_mp3            = $request->input('usb_mp3');


		//New

		$carro->vidrios_electricos   = $request->input('vidrios_electricos');
		$carro->rastreador    = $request->input('rastreador');
		$carro->rines_lujo              = $request->input('rines_lujo');
		$carro->full_equipo             = $request->input('full_equipo');
		$carro->dvd            = $request->input('dvd');

		//


		$carro->activo             = 0;

		$carro->save();

		$carro = DB::table('carros')->where('placa', $carro->placa )->first();
		$id=$carro->id;


		$para      = 'multiserviciosenlinea2016@gmail.com';
		$titulo    = 'Postulación de Vehículo';
		$mensaje   = '<h3>Una persona ha postulado su vehículo</h3>

		<p><b>Propietario: </b>                '. $request->input("propietario") .'</p>	  
		<p><b>Email:</b>                       '. $request->input("email") .' </p>
		<p><b>Teléfono Fijo:</b>               '. $request->input("telefono_fijo") .'</p>
		<p><b>Celular:</b>                     '. $request->input("celular") .'</p>	  
		<p><b>Marca: </b>                      '. $request->input("marca") .' </p>
		<p><b>Línea:  </b>                     '. $request->input("linea") .'</p>
		<p><b>Modelo:</b>                      '. $request->input("modelo") .'</p> 
		<p><h3><a type="buttom" style="pading:10px" href="http://alquilerdeautomoviles.com.co/vercarro/'.$id.'">Click aquí para ver detalles</a></h3></p>
		<p>
			<img width="500px" src="http://alquilerdeautomoviles.com.co/uploads/img/'.$filename1.'" alt="" class="img-responsive">
		</p>

		<p></p>
		'	;


		$cabeceras = 'From: admin@alquilerdeautomoviles.com.co' . "\r\n" .
		'Reply-To: admin@alquilerdeautomoviles.com.co' . "\r\n" .
		"Content-type: text/html; charset=UTF-8" . "\r\n".
		'X-Mailer: PHP/' . phpversion();

		mail($para, $titulo, $mensaje, $cabeceras);

		return view('postular',['status'=>'guardado']);
       //

	}

	public function contactoPersona(Request $datos){

		$asunto        =  $datos->input('asunto');
		$data   = $datos->input();
		$asunto = $datos->input('asunto');


		$para      = 'multiserviciosenlinea2016@gmail.com';
		$titulo    = 'Servicio al Cliente - alquilerdeautomoviles: '.$asunto;
		$mensaje   = '<p>Una persona ha enviado estos datos:</p>



		<p>Nombre:                 '. $datos->input("nombre") .'</p>	  
		<p>Email:                  '. $datos->input("email") .' </p>
		<p>Teléfono:               '. $datos->input("telefono") .'</p>
		<p>Mensaje:                '. $datos->input("mensaje") .'</p>'	;


		$cabeceras = 'From: admin@alquilerdeautomoviles.com.co' . "\r\n" .
		'Reply-To: admin@alquilerdeautomoviles.com.co' . "\r\n" .
		"Content-type: text/html; charset=UTF-8" . "\r\n".
		'X-Mailer: PHP/' . phpversion();

		mail($para, $titulo, $mensaje, $cabeceras);
		return view('contacto',['status'=>'enviado']);

	}


	public function cotizacionpersona(Request $datos){

		$asunto =  $datos->input('asunto');
		$data   = $datos->input();
		$asunto = $datos->input('asunto');


		$para      = 'multiserviciosenlinea2016@gmail.com';
		$titulo    = 'Cotización de Alquiler para Persona';
		$mensaje   = '<p>Una <b>persona</b> ha enviado estos datos:</p>

		<p>Vehículo: '.$datos->input("carro_seleccionado").'</p>
		<p>Fecha Inicial:          '.$datos->input("inicial").'</p>
		<p>Fecha Final:          '.$datos->input("final").'</p>
		<p>Nombre:                 '. $datos->input("nombre") .'</p>
		<p>Documento:               '. $datos->input("documento") .'</p>
		<p>Número:               '. $datos->input("numero_documento") .'</p>	  
		<p>Email:                  '. $datos->input("email") .' </p>
		<p>Teléfono:               '. $datos->input("telefono") .'</p>
		<p>Celular:               '. $datos->input("celular") .'</p>
		<p>Mensaje:                '. $datos->input("mensaje") .'</p>'	;


		$cabeceras = 'From: admin@alquilerdeautomoviles.com.co' . "\r\n" .
		'Reply-To: admin@alquilerdeautomoviles.com.co' . "\r\n" .
		"Content-type: text/html; charset=UTF-8" . "\r\n".
		'X-Mailer: PHP/' . phpversion();

		mail($para, $titulo, $mensaje, $cabeceras);
		return view('contratarvehiculo',['status'=>'enviado']);

	}


	public function cotizacionempresa(Request $datos){

		
		$data   = $datos->input();
		


		$para      = 'multiserviciosenlinea2016@gmail.com';
		$titulo    = 'Cotización de Alquiler para Empresa';
		$mensaje   = '<p>Una empresa ha enviado estos datos:</p>

		<p>Vehículo: '.$datos->input("carro_seleccionado").'</p>
		<p>Fecha Inicial:           '.$datos->input("inicial").'</p>
		<p>Fecha Final:             '.$datos->input("final").'</p><br>
		<p>Empresa:                 '. $datos->input("empresa") .'</p>
		<p>NIT:                     '. $datos->input("nit") .'</p>
		<p>Nombre de contacto:      '. $datos->input("contacto") .'</p>

		<p>Email:                   '. $datos->input("email") .' </p>
		<p>Teléfono:                '. $datos->input("telefono") .'</p>
		<p>Celular:                 '. $datos->input("celular") .'</p>
		<p>Mensaje:                 '. $datos->input("mensaje") .'</p>'	;


		$cabeceras = 'From: admin@alquilerdeautomoviles.com.co' . "\r\n" .
		'Reply-To: admin@alquilerdeautomoviles.com.co' . "\r\n" .
		"Content-type: text/html; charset=UTF-8" . "\r\n".
		'X-Mailer: PHP/' . phpversion();

		mail($para, $titulo, $mensaje, $cabeceras);
		return view('contratarvehiculo',['status'=>'enviado']);

	}

	public function alquiler(){
		$carros=DB::select('select * from carros where activo = 1');

		return view('alquiler',['carros'=>$carros]);
	}


	public function carro($id){
		$carro = App\Carros::find($id);

		return view('carro')->with('carro',$carro);
	}

	public function AlquilarVehiculo($id){
		$carroseleccionado = App\Carros::find($id);
		$carros=DB::select('select * from carros where activo = 1');

		return view('contratarvehiculo',['carros'=>$carros,'carroseleccionado'=>$carroseleccionado,'status'=>'nuevo']);


	}
	public function buscarCarro(Request $datos){

		$carroceria =  $datos->input('carroceria');
		$transmision =  $datos->input('transmision');
		$sql='select * from carros where activo = 1 and carroceria="'.$carroceria.'" and transmision="'.$transmision.'" ';
		$carros=DB::select($sql);

		return view('alquiler',['carros'=>$carros]);

	}

}

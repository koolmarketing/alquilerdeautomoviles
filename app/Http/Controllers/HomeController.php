<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use Illuminate\Http\Request;
use App;
use App\User;
//use Validator;
use App\Carros;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Storage;
use Mail;
Use Redirect;
use phpmailer;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function ListadoCarros(){

        $carros = App\Carros::all();

        return view('crud.listado')->with('carros',$carros);

    }

    public function VerCarro($id){


        $carro = App\Carros::find($id);

        return view('crud.carro')->with('carro',$carro);



    }

    public function EditarCarro($id){


        $carro = App\Carros::find($id);

        return view('crud.editarcarro')->with('carro',$carro);            

    }

        public function delete($id){
     $carro = App\Carros::find($id);
     
     $carro->delete();
     return redirect('listadecarros')->with('status', 'actualizado');
 }

    public function desactivar($id){
     $carro = App\Carros::find($id);
     $carro->activo = 0;
     $carro->save();
     return redirect('listadecarros')->with('status', 'actualizado');
 }

 public function activar($id){
    $carro = App\Carros::find($id);
    $carro->activo = 1;
    $carro->save();
    return redirect('listadecarros')->with('status', 'actualizado');
}

public function update(Request $request, $id){
    {
        $carro = App\Carros::find($id);
        

        $foto_1=$request->file('foto_1');
        $foto_2=$request->file('foto_2');
        $foto_3=$request->file('foto_3');



        $destinationPath = 'uploads/img/';

        if ($request->hasFile('foto_1')) {

            $file = $request->file('foto_1');
            $destinationPath = 'uploads/img';
            $extension = $file->getClientOriginalExtension();
            $filename1 = "".str_random(12).".".$extension."";
            $upload_success = $file->move($destinationPath, $filename1);            
            //Storage::disk('local')->put($nombre,  \File::get($file));
        }

        if ($request->hasFile('foto_2')) {

            $file = $request->file('foto_2');
            $destinationPath = 'uploads/img';
            $extension = $file->getClientOriginalExtension();
            $filename2 = "".str_random(12).".".$extension."";
            $upload_success = $file->move($destinationPath, $filename2);

            //return $filename;
            //Storage::disk('local')->put($nombre,  \File::get($file));
        }

        if ($request->hasFile('foto_3')) {

            $file = $request->file('foto_3');
            $destinationPath = 'uploads/img';
            $extension = $file->getClientOriginalExtension();
            $filename3 = "".str_random(12).".".$extension."";
            $upload_success = $file->move($destinationPath, $filename3);

            //return $filename;
            //Storage::disk('local')->put($nombre,  \File::get($file));
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
        $carro->activo             = 0;

        $carro->save();

        return redirect('listadecarros')->with('status', 'guardado');
       //
    }
}
}

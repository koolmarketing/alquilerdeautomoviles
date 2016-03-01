@extends('layouts.app')
@section('add_style')
{!! HTML::style("css/maincamoranns.css") !!}
@stop

@section('content')

<div class="container">
	<div class="col-md-12 ">
		<h1>{!! $carro->marca !!} {!! $carro->linea !!} <small>{!! $carro->modelo !!}</small></h1><br><br>


	{!! Form::open(array('method' => 'put', 'url' => 'editarcarro/'.$carro->id.'', 'files' => true,'id'=>$carro->id)) !!}

	

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#datos1" aria-controls="datos1" role="tab" data-toggle="tab">Datos de Contacto</a></li>
            <li role="presentation"><a href="#datos2" aria-controls="datos2" role="tab" data-toggle="tab">Información del Vehículo</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="datos1">
              <br>
              <div class="col-md-12">	
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-user-2"></i> Nombre Completo</label>
                  <input type="text" class="form-control" value="{!! $carro->propietario !!}" name="propietario" id="exampleInputEmail1" placeholder="Nombre" required="requerid">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-mail"></i> Email</label>
                  <input type="email" class="form-control" value="{!! $carro->email !!}"  name="email" id="exampleInputEmail1" placeholder="Email" required="requerid">
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-phone"></i> Teléfono Fijo</label>
                  <input type="text" class="form-control" value="{!! $carro->telefono_fijo !!}"  name="telefono_fijo" id="exampleInputEmail1" placeholder="Email" required="requerid">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-mobile-2"></i> Celular</label>
                  <input type="text" class="form-control" value="{!! $carro->celular !!}" name="celular" id="exampleInputEmail1" placeholder="Email" required="requerid">
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><i class="icon-glasses"></i> Profesión</label>
                  <select class="form-control" id="actividad" name="actividad" value="{!! $carro->actividad !!}" >
                    <option value="Estudiante">Estudiante</option>
                    <option value="Trabajador Independiente">Trabajador Independiente</option>
                    <option value="Empleado(a)">Empleado(a)</option>
                    <option value="Desempleado(a)">Desempleado(a)</option>
                    <option value="Ama de casa">Ama de casa</option>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><i class="icon-location-2"></i>Ciudad</label>
                  <input type="text" class="form-control" value="{!! $carro->ciudad !!}" name="ciudad" id="exampleInputEmail1" >
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><i class="icon-location-2"></i>Dirección</label>
                  <input type="text" class="form-control" value="{!! $carro->direccion !!}" name="direccion" id="exampleInputEmail1" >
                </div>

              

             </div>


            <br>

          </div>




          <div role="tabpanel" class="tab-pane" id="datos2"><br>
            <div class="col-lg-7 col-sm-12 col-xs-12">
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-star"></i>Marca</label>
                <input type="text" value="{!! $carro->marca !!}" name="marca" class="form-control" id="exampleInputEmail1" >
              </div>

              <div class="form-group col-md-3">
                <label for="exampleInputEmail1"><i class=" icon-cab"></i> Línea</label>
                <input type="text" value="{!! $carro->linea !!}" name="linea" class="form-control" id="exampleInputEmail1" >
              </div>

              <div class="form-group col-md-3">
                <label for="exampleInputEmail1"><i class="icon-asterisk-1"></i> Modelo</label>
                <input type="number" value="{!! $carro->modelo !!}" name="modelo" class="form-control" id="exampleInputEmail1" >
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-color-adjust"></i> Color</label>
                <input type="text" value="{!! $carro->color !!}" name="color" class="form-control" id="exampleInputEmail1" >
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-location-8"></i> Placa</label>
                <input type="text" value="{!! $carro->placa !!}" name="placa" class="form-control" id="exampleInputEmail1" >
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-cog-1"></i>Transmisión</label>
                <!-- <input type="text" class="form-control" id="exampleInputEmail1" > -->
                <select class="form-control" id="transmision" name="transmision" id="transmision">
                 <option value="Manual">Manual</option>
                 <option value="Automatica">Automatica</option>
                 <option value="Tiptronic">Tiptronic</option>
                 <option value="CVT">CVT</option>
               </select>
             </div>

             <div class="form-group col-md-6">
              <label for="exampleInputEmail1"><i class="icon-gauge-2"></i> Tipo de Combustible</label>
              <!-- <input type="text" class="form-control" id="exampleInputEmail1" > -->
              <select class="form-control" name="combustible" id="combustible">
               <option value="Gasolina">Gasolina</option>
               <option value="Dis">Diesel</option>
               <option value="Gas">Gas</option>
             </select>
           </div>

           <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><i class="icon-key-1"></i> Carrocería</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" > -->
            <select class="form-control" id="carroceria" name="carroceria" id="carroceria">
              <option value="Sedan">Sedan</option>
              <option value="Coupe">Coupe</option>
              <option value="Convertible">Convertible</option>
              <option value="Hybrido">Hybrido</option>
              <option value="Hatchback">Hatchback</option>        
              <option value="Wagon">Wagon</option>
              <option value="Campero">Campero</option>
              <option value="4x4">4x4</option>
              <option value="Camioneta">Camioneta</option>
              <option value="Blindado">Blindado</option>
              <option value="Pickup">Pickup</option>
              <option value="Tuning">Tuning</option>
              <option value="Minivan">Minivan</option>
              <option value="Van">Van</option>

            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><i class="icon-users"></i>Capacidad Max. Pasajeros</label>
            <input type="number" min="1" value="{!! $carro->pasajeros !!}" name="pasajeros" class="form-control" id="exampleInputEmail1" >
          </div>

          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><i class="icon-dollar"></i>Precio por día de alquiler</label>
            <input min="0" type="number" value="{!! $carro->precio_dia !!}" name="precio_dia" class="form-control" id="exampleInputEmail1" >
          </div>

          <div class="form-group col-md-6">

            <label for="foto_1"><i class="icon-camera"></i>1. Fotografía</label>
            <input type="file"  id="foto_1" name="foto_1" style="font-size: 12px;">

            <label for="foto_2"><i class="icon-camera"></i>2. Fotografía</label>
            <input type="file" id="foto_2" name="foto_2" style="font-size: 12px;">

            <label for="foto_3"><i class="icon-camera"></i>3. Fotografía</label>
            <input type="file" id="foto_3" name="foto_3" style="font-size: 12px;">

          </div>





          <div class="form-group col-md-12">
            <label for="exampleInputEmail1"><i class="icon-info-8"></i>Observaciones</label>
            <textarea name="observaciones" id="input" class="form-control" rows="3" required="required">{!! $carro->observaciones !!}
            </textarea>
          </div>

          <br><br>
        </div>



        <div class="col-lg-5">

          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width ="70%">Item</th>
                <th width ="15%">Si</th>
                <th width="15%">No</th>

              </tr>
            </thead>
            <tbody>

              <tr>
                <td>Aire acondicionado</td>
                <td align="center">
                  <div class="radio">


                    <input type="radio" name="aire_acondicionado" id="r1" value="1">
                    <label for="aire_acondicionado">
                    </label>
                  </div>

                </td>
                <td align="center">  
                  <div class="radio">  										
                    <input type="radio" name="aire_acondicionado" id="r2" value="0" >
                    <label for="aire_acondicionado">

                    </label>
                  </div>
                </td>

              </tr>
              <tr>
                <td>4x4</td>
                <td align="center">
                  <div class="radio">


                    <input type="radio" name="_4x4" id="r3" value="1">
                    <label for="_4x4">
                    </label>
                  </div>


                </td>
                <td align="center">  
                  <div class="radio">   											

                    <input type="radio" name="_4x4" id="r4" value="0" >
                    <label for="_4x4">

                    </label>
                  </div>
                </td>

              </tr>
              <tr>
                <td>Frenos ABS</td>

                <td align="center"><div class="radio">

                  <input type="radio" name="freno_abs" id="r5" value="1">
                  <label for="frenos_abs">
                  </label>
                </div>


              </td>
              <td align="center">  
                <div class="radio">								

                  <input type="radio" name="freno_abs" id="r6" value="0" >
                  <label for="frenos_abs">
                  </label>
                </div>
              </td>

            </tr>
            <tr>
              <td>Cojinería en Cuero</td>
              <td align="center">
                <div class="radio">
                  <input type="radio" name="cojineria_cuero" id="r7" value="1" >
                  <label for="cojineria_cuero">
                  </label></div>
                </td>


                <td align="center">
                  <div class="radio">
                    <input type="radio" name="cojineria_cuero" id="r8" value="0" >
                    <label for="cojineria_cuero">
                    </label></div>
                  </td>

                </tr>


                <tr>
                  <td>Se permite mascotas</td>
                  <td align="center">
                    <div class="radio">
                      <input type="radio" name="mascotas" id="r9" value="1" >
                      <label for="mascotas">
                      </label></div>
                    </td>


                    <td align="center">
                      <div class="radio">
                        <input type="radio" name="mascotas" id="r10" value="0" >
                        <label for="mascotas">
                        </label></div>
                      </td>

                    </tr>

                    <tr>
                      <td>Entrega a domicilio</td>
                      <td align="center">
                        <div class="radio">
                          <input type="radio" name="entrega_domicilio" id="r11" value="1" >
                          <label for="entrega_domicilio">
                          </label></div>
                        </td>


                        <td align="center">
                          <div class="radio">
                            <input type="radio" name="entrega_domicilio" id="r12" value="0" >
                            <label for="entrega_domicilio">
                            </label></div>
                          </td>

                        </tr>

                        <tr>
                          <td>Radio</td>
                          <td align="center">
                            <div class="radio">
                             <input type="radio" name="radio" id="r13" value="1" >
                             <label for="radio">
                             </label></div>
                           </td>


                           <td align="center">
                             <div class="radio">
                              <input type="radio" name="radio" id="r14" value="0" >
                              <label for="radio">
                              </label></div>
                            </td>
                          </tr>

                          <tr>
                           <td>CD/MP3</td>
                           <td align="center">
                            <div class="radio">
                             <input type="radio" name="cd_mp3" id="r15" value="1" >
                             <label for="cd_mp3">
                             </label></div>
                           </td>
                           <td align="center">
                             <div class="radio">
                              <input type="radio" name="cd_mp3" id="r16" value="0" >
                              <label for="cd_mp3">
                              </label></div>
                            </td>
                          </tr>

                          <tr>
                           <td>USB/MP3</td>
                           <td align="center">
                            <div class="radio">
                             <input type="radio" name="usb_mp3" id="r17" value="1" >
                             <label for="usb_mp3">
                             </label></div>
                           </td>
                           <td align="center">
                             <div class="radio">
                              <input type="radio" name="usb_mp3" id="r18" value="0" >
                              <label for="usb_mp3">
                              </label></div>
                            </td>
                          </tr>

                          <tr>
                           <td>Airbag Conductor</td>
                           <td align="center">
                            <div class="radio">
                             <input type="radio" name="airbag_conductor" id="r19" value="1" >
                             <label for="airbag_conductor">
                             </label></div>
                           </td>
                           <td align="center">
                             <div class="radio">
                              <input type="radio" name="airbag_conductor" id="r20" value="0" >
                              <label for="airbag_conductor">
                              </label></div>
                            </td>
                          </tr>

                          <tr>
                           <td>Airbag Copiloto</td>
                           <td align="center">
                            <div class="radio">
                             <input type="radio" name="airbag_copiloto" id="r21" value="1" >
                             <label for="airbag_copiloto">
                             </label></div>
                           </td>
                           <td align="center">
                             <div class="radio">
                              <input type="radio" name="airbag_copiloto" id="r22" value="0" >
                              <label for="airbag_copiloto">
                              </label></div>
                            </td>
                          </tr>

                        </tbody>
                      </table>	 

                    </div>


                  </div>

                  <div class="form-group col-md-12">
                       

                       {!! Form::submit('Editar Carro!',array('class' => 'btn btn-primary btn-md')) !!}	
                     </div>

                           {!! Form::close() !!}


			@stop


			@section('add_script')
			
<script>
	$(document).ready(function() {
    $("#actividad option[value='{!! $carro->actividad !!}']").prop('selected', true);
    $("#transmision option[value='{!! $carro->transmision !!}']").prop('selected', true);
    $("#carroceria option[value='{!! $carro->carroceria !!}']").prop('selected', true);
    // you need to specify id of combo to set right combo, if more than one combo
    @if ($carro->aire_acondicionado=="1")
    $("#r1").prop('checked', true);
    @else
    $("#r2").prop('checked', true);
    @endif

    @if ($carro->_4x4=="1")
    $("#r3").prop('checked', true);
    @else
    $("#r4").prop('checked', true);
    @endif

        @if ($carro->freno_abs=="1")
    $("#r5").prop('checked', true);
    @else
    $("#r6").prop('checked', true);
    @endif

         @if ($carro->cojineria_cuero=="1")
    $("#r7").prop('checked', true);
    @else
    $("#r8").prop('checked', true);
    @endif

    @if ($carro->mascotas=="1")
    $("#r9").prop('checked', true);
    @else
    $("#r10").prop('checked', true);
    @endif

   @if ($carro->entrega_domicilio=="1")
   $("#r11").prop('checked', true);
   @else
   $("#r12").prop('checked', true);
   @endif

   @if ($carro->radio=="1")
   $("#r13").prop('checked', true);
   @else
   $("#r14").prop('checked', true);
   @endif

      @if ($carro->cd_mp3=="1")
   $("#r15").prop('checked', true);
   @else
   $("#r16").prop('checked', true);
   @endif

         @if ($carro->usb_mp3=="1")
   $("#r17").prop('checked', true);
   @else
   $("#r18").prop('checked', true);
   @endif

            @if ($carro->airbag_conductor=="1")
   $("#r19").prop('checked', true);
   @else
   $("#r20").prop('checked', true);
   @endif

               @if ($carro->airbag_copiloto=="1")
   $("#r21").prop('checked', true);
   @else
   $("#r22").prop('checked', true);
   @endif

   


});
</script>


			@stop
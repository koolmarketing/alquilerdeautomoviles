@extends('templates.master')

@section('contenido')


<!-- =========================
Header
============================== -->
<section class="header-pages nosotros">

  <!-- *****  Logo ***** -->
  <div class="logo-container text-center">
    <a href="#">
      <img src="img/logo-header.png" class="logo-banner" width="220px" alt="">
    </a>
  </div>
  <div id="titulo">
    <h1 class="title-center"> POSTULAR MI CARRO

    </h1>
  </div>


</section> <!-- *** end Header *** -->




<!-- =========================
About Us
============================== -->
<section id="about-us" class="about-us">
  <div class="overlay">
    <div class="container padding-top-large">
      <!-- Alquiler de automoviles -->

      <div class="col-md-12">


        <div>





          <div class="text-center m-b-md" id="wizardControl">

            <a class="btn btn-primary" href="#step1" data-toggle="tab"><b>Paso 1</b> - Información Personal</a>
            <a class="btn btn-default" href="#step2" data-toggle="tab"><b>Paso 2</b> - Datos del Vehículo</a>
            <a class="btn btn-default" href="#step3" data-toggle="tab"><b>Paso 3</b> - Características</a>
            <a class="btn btn-default" href="#step4" data-toggle="tab">Requisitos</a>

          </div>

          <div class="tab-content">
            <div id="step1" class="p-m tab-pane active">
              <br>
              {!! Form::open(array('method' => 'post', 'url' => 'postular', 'files' => true)) !!}
              <div class="row">


                <div class="row">
                 <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-user-2"></i> Nombre Completo</label>
                  <input type="text" class="form-control" name="propietario" id="propietario" placeholder="Nombre" required="requerid">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-mail"></i> Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="requerid">
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-phone"></i> Teléfono Fijo</label>
                  <input type="text" class="form-control" name="telefono_fijo" id="telefono_fijo" placeholder="Teléfono" required="requerid">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-mobile-2"></i> Celular</label>
                  <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular" required="requerid">
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><i class="icon-glasses"></i> Profesión</label>
                  <select class="form-control" name="actividad">
                    <option value="Estudiante">Estudiante</option>
                    <option value="Trabajador Independiente">Trabajador Independiente</option>
                    <option value="Empleado(a)">Empleado(a)</option>
                    <option value="Desempleado(a)">Desempleado(a)</option>
                    <option value="Ama de casa">Ama de casa</option>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><i class="icon-location-2"></i>Ciudad</label>
                  <input type="text" class="form-control" name="ciudad" id="ciudad" >
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><i class="icon-location-2"></i>Dirección</label>
                  <input type="text" class="form-control" name="direccion" id="direccion" >
                </div>

              </div>
            </div>

            <div class="text-right m-t-xs">

              <a class="btn btn-default next" >Siguiente</a>
            </div>

          </div>

          <div id="step2" class="p-m tab-pane">
            <br>

            <div class="row">

              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-star"></i>Marca</label>
                <input type="text" name="marca" class="form-control" id="marca" required="requerid">
              </div>

              <div class="form-group col-md-3">
                <label for="exampleInputEmail1"><i class=" icon-cab"></i> Línea</label>
                <input type="text" name="linea" class="form-control" id="linea" required="requerid">
              </div>

              <div class="form-group col-md-3">
                <label for="exampleInputEmail1"><i class="icon-asterisk-1"></i> Modelo</label>
                <input type="number" name="modelo" class="form-control" id="modelo" required="requerid">
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-color-adjust"></i> Color</label>
                <input type="text" name="color" class="form-control" id="color" required="requerid">
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-location-8"></i> Placa</label>
                <input type="text" name="placa" class="form-control" id="placa" required="requerid">
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-cog-1"></i>Transmisión</label>

                <select class="form-control" name="transmision" id="transmision">
                 <option value="Manual">Manual</option>
                 <option value="Automatica">Automatica</option>
                 <option value="Tiptronic">Tiptronic</option>
                 <option value="CVT">CVT</option>
               </select>
             </div>

             <div class="form-group col-md-6">
              <label for="exampleInputEmail1"><i class="icon-gauge-2"></i> Tipo de Combustible</label>

              <select class="form-control" name="combustible" id="combustible">
               <option value="Gasolina">Gasolina</option>
               <option value="Dis">Diesel</option>
               <option value="Gas">Gas</option>
             </select>
           </div>

           <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><i class="icon-key-1"></i> Carrocería</label>

            <select class="form-control" name="carroceria" id="carroceria">
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
            <input type="number" min="1" name="pasajeros" class="form-control" id="pasajeros" >
          </div>

          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><i class="icon-dollar"></i>Precio por día de alquiler</label>
            <input min="0" type="number" id="precio_dia" name="precio_dia" class="form-control" id="precio_dia" >
          </div>


          <div class="col-md-12">

            <div class="form-group col-md-6">

              <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Fotografías de su vehículo, archivos <b>jpg, png, gif</b>
              </div>
              <label for="foto_1"><i class="icon-camera"></i>1. Fotografía <small>(Principal)</small></label>
              <input type="file"  id="foto_1" name="foto_1" style="font-size: 16px;" requerid="requerid">
<br>
              <label for="foto_2"><i class="icon-camera"></i>2. Fotografía</label>
              <input type="file" id="foto_2" name="foto_2" style="font-size: 16px;">
<br>
              <label for="foto_3"><i class="icon-camera"></i>3. Fotografía</label>
              <input type="file" id="foto_3" name="foto_3" style="font-size: 16px;">

            </div>

            <div class="form-group col-md-6">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b>Fotografia o escaner de sus documentos.</b>
              </div>

              <label for="soat"><i class="icon-doc"></i>1. SOAT</label>
              <input type="file" id="soat" name="soat" style="font-size: 16px;">
<br>
              <label for="rodamiento"><i class="icon-doc"></i>2. Impuesto de Rodamiento</label>
              <input type="file" id="rodamiento" name="rodamiento" style="font-size: 16px;">
<br>
              <label for="tecnomecanica"><i class="icon-doc"></i>3. Revición técnico mecánica</label>
              <input type="file" id="tecnomecanica" name="tecnico_mecanica" style="font-size: 16px;">
<br>
              <label for="tecnomecanica"><i class="icon-doc"></i>4. Tarjeta de Propiedad</label>
              <input type="file" id="tarjeta_propiedad" name="tarjeta_propiedad" style="font-size: 16px;">
<br>
              <label for="tecnomecanica"><i class="icon-doc"></i>5. Cédula de ciudadanía</label>
              <input type="file" id="cedula_ciudadania" name="cedula_ciudadania" style="font-size: 16px;">
<br>
<button type="button" class="btn btn-default btn-lg"><i class="icon-eye-2"></i> Información sobre protección de sus datos</button>



            </div>




          </div>

          





          <div class="form-group col-md-12">
            <label for="exampleInputEmail1"><i class="icon-info-8"></i>Observaciones</label>
            <textarea name="observaciones" id="input" class="form-control" rows="3"></textarea>
          </div>

        </div>
        <div class="text-right m-t-xs">
          <a class="btn btn-default prev" >Atrás</a>
          <a class="btn btn-default next" >Siguiente</a>
        </div>

      </div>
      <div id="step3" class="tab-pane">
        <br>
        <div class="row">

          <div class="col-md-6"> 

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
                    <input type="radio" name="aire_acondicionado" id="r2" value="0" checked>
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

                    <input type="radio" name="_4x4" id="r4" value="0" checked>
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

                  <input type="radio" name="freno_abs" id="r6" value="0" checked>
                  <label for="frenos_abs">
                  </label>
                </div>
              </td>

            </tr>

            <tr>
             <td>Airbag Conductor</td>
             <td align="center">
              <div class="radio">
               <input type="radio" name="airbag_conductor" id="r19" value="1" checked>
               <label for="airbag_conductor">
               </label></div>
             </td>
             <td align="center">
               <div class="radio">
                <input type="radio" name="airbag_conductor" id="r20" value="0" checked>
                <label for="airbag_conductor">
                </label></div>
              </td>
            </tr>

            <tr>
             <td>Airbag Copiloto</td>
             <td align="center">
              <div class="radio">
               <input type="radio" name="airbag_copiloto" id="r21" value="1" checked>
               <label for="airbag_copiloto">
               </label></div>
             </td>
             <td align="center">
               <div class="radio">
                <input type="radio" name="airbag_copiloto" id="" value="0" checked>
                <label for="airbag_copiloto">
                </label></div>
              </td>
            </tr>
            <tr>
              <td>Cojinería en Cuero</td>
              <td align="center">
                <div class="radio">
                  <input type="radio" name="cojineria_cuero" id="r7" value="1" checked>
                  <label for="cojineria_cuero">
                  </label></div>
                </td>


                <td align="center">
                  <div class="radio">
                    <input type="radio" name="cojineria_cuero" id="r8" value="0" checked>
                    <label for="cojineria_cuero">
                    </label></div>
                  </td>

                </tr>


                <tr>
                  <td>Se permite mascotas</td>
                  <td align="center">
                    <div class="radio">
                      <input type="radio" name="mascotas" id="r9" value="1" checked>
                      <label for="mascotas">
                      </label></div>
                    </td>


                    <td align="center">
                      <div class="radio">
                        <input type="radio" name="mascotas" id="r10" value="0" checked>
                        <label for="mascotas">
                        </label></div>
                      </td>

                    </tr>

                    <tr>
                      <td>Entrega a domicilio</td>
                      <td align="center">
                        <div class="radio">
                          <input type="radio" name="entrega_domicilio" id="r11" value="1" checked>
                          <label for="entrega_domicilio">
                          </label></div>
                        </td>


                        <td align="center">
                          <div class="radio">
                            <input type="radio" name="entrega_domicilio" id="r12" value="0" checked>
                            <label for="entrega_domicilio">
                            </label></div>
                          </td>

                        </tr>



                      </tbody>
                    </table>  
                  </div>


                  <div class="col-md-6"> 

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
                        <td>Radio</td>
                        <td align="center">
                          <div class="radio">
                           <input type="radio" name="radio" id="r13" value="1" checked>
                           <label for="radio">
                           </label></div>
                         </td>


                         <td align="center">
                           <div class="radio">
                            <input type="radio" name="radio" id="r14" value="0" checked>
                            <label for="radio">
                            </label></div>
                          </td>
                        </tr>

                        <tr>
                         <td>CD/MP3</td>
                         <td align="center">
                          <div class="radio">
                           <input type="radio" name="cd_mp3" id="r15" value="1" checked>
                           <label for="cd_mp3">
                           </label></div>
                         </td>
                         <td align="center">
                           <div class="radio">
                            <input type="radio" name="cd_mp3" id="r16" value="0" checked>
                            <label for="cd_mp3">
                            </label></div>
                          </td>
                        </tr>

                        <tr>
                          <td>DVD</td>
                          <td align="center">
                            <div class="radio">
                             <input type="radio" name="dvd" id="r28" value="1" checked>
                             <label for="airbag_copiloto">
                             </label></div>
                           </td>
                           <td align="center">
                             <div class="radio">
                              <input type="radio" name="dvd" id="r29" value="0" checked>
                              <label for="airbag_copiloto">
                              </label></div>
                            </td>
                          </tr>

                          <tr>
                           <td>USB/MP3</td>
                           <td align="center">
                            <div class="radio">
                             <input type="radio" name="usb_mp3" id="r17" value="1" checked>
                             <label for="usb_mp3">
                             </label></div>
                           </td>
                           <td align="center">
                             <div class="radio">
                              <input type="radio" name="usb_mp3" id="r18" value="0" checked>
                              <label for="usb_mp3">
                              </label></div>
                            </td>
                          </tr>


                          <tr>
                           <td>Full Equipo</td>
                           <td align="center">
                            <div class="radio">
                             <input type="radio" name="full_equipo" id="r22" value="1" checked>
                             <label for="airbag_copiloto">
                             </label></div>
                           </td>
                           <td align="center">
                             <div class="radio">
                              <input type="radio" name="full_equipo" id="r23" value="0" checked>
                              <label for="airbag_copiloto">
                              </label></div>
                            </td>
                          </tr>

                          <tr>
                           <td>Rines de Lujo</td>
                           <td align="center">
                            <div class="radio">
                             <input type="radio" name="rines_lujo" id="r24" value="1" checked>
                             <label for="airbag_copiloto">
                             </label></div>
                           </td>
                           <td align="center">
                             <div class="radio">
                              <input type="radio" name="rines_lujo" id="r25" value="0" checked>
                              <label for="airbag_copiloto">
                              </label></div>
                            </td>
                          </tr>

                          <tr>
                            <td>Vidrios Eléctricos</td>
                            <td align="center">
                              <div class="radio">
                               <input type="radio" name="vidrios_electricos" id="r26" value="1" checked>
                               <label for="airbag_copiloto">
                               </label></div>
                             </td>
                             <td align="center">
                               <div class="radio">
                                <input type="radio" name="vidrios_electricos" id="r27" value="0" checked>
                                <label for="airbag_copiloto">
                                </label></div>
                              </td>
                            </tr>

                            <tr>
                              <td>Rastreador Satelital</td>
                              <td align="center">
                                <div class="radio">
                                 <input type="radio" name="rastreador" id="r30" value="1" checked>
                                 <label for="airbag_copiloto">
                                 </label></div>
                               </td>
                               <td align="center">
                                 <div class="radio">
                                  <input type="radio" name="rastreador" id="r31" value="0" checked>
                                  <label for="airbag_copiloto">
                                  </label></div>
                                </td>
                              </tr>



                            </tbody>
                          </table>  
                        </div>






                      </div>



                      <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" >Atrás</a>
                        <a class="btn btn-default next" >Siguiente</a>
                      </div>
                    </div>


                    <div id="step4" class="tab-pane">
                      <br>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-4 col-md-offset-2" id="requisitos"><br> 
                            <h4 class="text-center title-alquiler-h5"><i class="icon-list-2"></i> Requisitos</h4>   <br> 


                            <p>1. Copia de tarjeta propiedad </p>
                            <p>2. Cédula de propietario </p>
                            <p>3. Documentos vigentes</p>
                            <p>4. Revisión Tecnomecánica</p>
                            <p>5. SOAT</p>
                            <p>6. Fichas de mantenimiento periódicos (frenos, aceite, …) </p>
                            <p>7. Formulario diligenciado una vez aprobado la inscripción </p>

                            <p> (<a href="{!! URL::to('terminos-y-condiciones') !!}" target="_blank">Leer Terminos y condiciones</a>) </p>

                            <div class="form-group col-md-12">
                              <div class="checkbox">
                               <input type="checkbox" class="styled" id="singleCheckbox1" value="option1" aria-label="Single checkbox One" required="requerid">
                               <label class="aceptar_terminos"><b>Cumplo a cabalidad con los requisitos  <a href="{!! URL::to('terminos-y-condiciones') !!}" target="_blank">y he leido los terminos y condiciones</a></b></label>
                             </div>
                           </div>

                         </div>

                         <div class="col-md-4"><br><br><br>
                           {!! HTML::image("img/hombreycarro.jpg","",array("class"=>"img-responsive img-thumbnail"))!!}
                         </div>   
                       </div>

                       <br><br>




                       <div class="text-right m-t-xs">
                        <a class="btn btn-default prev" href="#">Atrás</a>


                        {!! Form::submit('Postular mi Vehículo!',array('class' => 'btn btn-primary', 'id' => 'enviar-postulacion')) !!}
                      </div>
                    </div>
                  </div>


                </div>
                {!! Form::close() !!}



                <br>
              </div>

            </div>
            <br>
          </div>
        </div>

      </section> <!-- *** end About Us *** -->




<!-- =========================
Promote
============================== -->
<section id="promote" class="promote main-bg white-color">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-4 text-center">
        <p class="light-text" style="font-family:'Open Sans', sans-serif;">Si requiere más información</p>
      </div>
      <div class="col-lg-6 col-lg-offset-1 col-md-7 col-sm-8 button-container">
        <a href="{!! URL::to('nosotros')!!}" class="button deep hvr-grow">Asesoría</a>
        <span class="margin-right-small margin-left-small">ó</span>
        <a href="{!! URL::to('contacto')!!}" class="button light hvr-grow">Enviar mensaje</a>
      </div>
    </div>
  </div>
</section> <!-- *** end promote *** -->



@stop

@section('add_scripts')

<script>

  $(function(){

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      $('a[data-toggle="tab"]').removeClass('btn-primary');
      $('a[data-toggle="tab"]').addClass('btn-default');
      $(this).removeClass('btn-default');
      $(this).addClass('btn-primary');
    })

    $('.next').click(function(){
      var nextId = $(this).parents('.tab-pane').next().attr("id");
      $('[href=#'+nextId+']').tab('show');
    })

    $('.prev').click(function(){
      var prevId = $(this).parents('.tab-pane').prev().attr("id");
      $('[href=#'+prevId+']').tab('show');
    })

    $('.submitWizard').click(function(){

      var approve = $(".approveCheck").is(':checked');
      if(approve) {
                // Got to step 1
                $('[href=#step1]').tab('show');

                // Serialize data to post method
                var datastring = $("#simpleForm").serialize();

                // Show notification
                swal({
                  title: "Thank you!",
                  text: "You approved our example form!",
                  type: "success"
                });

              } else {
                // Show notification
                swal({
                  title: "Error!",
                  text: "You have to approve form checkbox.",
                  type: "error"
                });
              }
            })
  });
</script>



@if ($status=="guardado")
<script>
  // alert('Su carro ha sido registrado de manera exitosa, en este momento esta en revisión, nos comunicaremos con usted muy pronto');

  swal({
    title: "Gracias !",
    text: "Su carro ha sido registrado de manera exitosa, en este momento estamos verificando su información, nos comunicaremos con usted muy pronto",
    type: "success"
  });
</script>
@endif

<script>
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  e.target // newly activated tab
  e.relatedTarget // previous active tab
})
</script>

<script>
  $('html').on('click', '#enviar-postulacion', function(event) {

    errores=[];

    propietario = $('#propietario').prop('value');
    email = $('#email').prop('value');
    telefono_fijo = $('#telefono_fijo').prop('value');
    celular = $('#celular').prop('value');
    profesion = $('#profesion').prop('value');
    ciudad = $('#ciudad').prop('value');
    direccion = $('#direccion').prop('value');
    marca = $('#marca').prop('value');
    linea = $('#linea').prop('value');
    modelo = $('#modelo').prop('value');
    color = $('#color').prop('value');
    placa = $('#placa').prop('value');
    pasajeros = $('#pasajeros').prop('value');

    soat = $('#soat').prop('value');
    rodamiento = $('#rodamiento').prop('value');
    tecnico_mecanica = $('#tecnico_mecanica').prop('value');
    tarjeta_propiedad = $('#tarjeta_propiedad').prop('value');
    cedula_ciudadania = $('#cedula_ciudadania').prop('value');

    if (propietario=="") {
      mostraralerta("Nombre");
    };
    if (email=="") {
      mostraralerta("Email");
    };
    if (telefono_fijo=="") {
      mostraralerta("Teléfono");
    };
    
    if (celular=="") {
      mostraralerta("Celular");
    };
    if (ciudad=="") {
      mostraralerta("Ciudad");
    };
    if (direccion=="") {
      mostraralerta("Direccion");
    };
    if (marca=="") {
      mostraralerta("Marca");
    };
    if (linea=="") {
      mostraralerta("Línea");
    };
    if (modelo=="") {
      mostraralerta("Modelo");
    };
    if (color=="") {
      mostraralerta("Color");
    };
    if (placa=="") {
      mostraralerta("Placa");
    };
    if (pasajeros=="") {
      mostraralerta("Pasajeros");
    };
    if (precio_dia=="") {
      mostraralerta("Precio por día");
    };
      if (soat=="") {
      mostraralerta("SOAT");
    };
        if (rodamiento=="") {
      mostraralerta("Impuesto de Rodamiento");
    };

           if (tecnico_mecanica=="") {
      mostraralerta("Revisión Técnico-Mecánica");
    };







    
  });

function mostraralerta(input){

  swal({title: "<b>Faltan Capo(s)</b>!",
   text: "Por favor completa todos los campos y no olvides leer y aceptar la lista de requisitos<br><br><i class=' icon-cancel-circled2-1'></i>Falta el campo <b>"+input+"</b>",
   html: true 
 });
}


</script>




@stop



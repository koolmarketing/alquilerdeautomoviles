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
    <h1 class="title-center"> POSTULAR MI CARRO  </h1>
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

          {!! Form::open(array('method' => 'post', 'url' => 'postular', 'files' => true)) !!}

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#datos1" aria-controls="datos1" role="tab" data-toggle="tab">Datos de Contacto</a></li>
            <li role="presentation"><a href="#datos2" aria-controls="datos2" role="tab" data-toggle="tab">Información del Vehículo</a></li>

            <li role="presentation"><a href="#datos4" aria-controls="datos4" role="tab" data-toggle="tab">Requisitos de alquiler de Carros </a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="datos1">
              <br>
              <div class="col-md-7">	
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-user-2"></i> Nombre Completo</label>
                  <input type="text" class="form-control" name="propietario" id="exampleInputEmail1" placeholder="Email" required="requerid">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-mail"></i> Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" required="requerid">
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-phone"></i> Teléfono Fijo</label>
                  <input type="text" class="form-control" name="telefono_fijo" id="exampleInputEmail1" placeholder="Email" required="requerid">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1"><i class="icon-mobile-2"></i> Celular</label>
                  <input type="text" class="form-control" name="celular" id="exampleInputEmail1" placeholder="Email" required="requerid">
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
                  <input type="text" class="form-control" name="ciudad" id="exampleInputEmail1" >
                </div>

                <div class="form-group col-md-4">
                  <label for="exampleInputEmail1"><i class="icon-location-2"></i>Dirección</label>
                  <input type="text" class="form-control" name="direccion" id="exampleInputEmail1" >
                </div>

                <div class="col-lg-12">
                 <a id="btn1" href="#datos2" aria-controls="datos2" role="tab" data-toggle="tab" onclick="selectDatos2()" class="siguiente btn btn-md btn-primary" style="margin-bottom: 15px;">Seguiente</a>
                 <br>
               </div><br>

             </div>

             <div class="col-md-5">	<br><br>
              {!! HTML::image("img/slider/slider-2.jpg","",array("class"=>"img-responsive img-thumbnail"))!!}
              <br><br>
            </div>

            <br>

          </div>




          <div role="tabpanel" class="tab-pane" id="datos2"><br>
            <div class="col-lg-7 col-sm-12 col-xs-12">
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-star"></i>Marca</label>
                <input type="text" name="marca" class="form-control" id="exampleInputEmail1" >
              </div>

              <div class="form-group col-md-3">
                <label for="exampleInputEmail1"><i class=" icon-cab"></i> Línea</label>
                <input type="text" name="linea" class="form-control" id="exampleInputEmail1" >
              </div>

              <div class="form-group col-md-3">
                <label for="exampleInputEmail1"><i class="icon-asterisk-1"></i> Modelo</label>
                <input type="number" name="modelo" class="form-control" id="exampleInputEmail1" >
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-color-adjust"></i> Color</label>
                <input type="text" name="color" class="form-control" id="exampleInputEmail1" >
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-location-8"></i> Placa</label>
                <input type="text" name="placa" class="form-control" id="exampleInputEmail1" >
              </div>

              <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="icon-cog-1"></i>Transmisión</label>
                <!-- <input type="text" class="form-control" id="exampleInputEmail1" > -->
                <select class="form-control" name="transmision" id="transmision">
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
            <input type="number" min="1" name="pasajeros" class="form-control" id="exampleInputEmail1" >
          </div>

          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><i class="icon-dollar"></i>Precio por día de alquiler</label>
            <input min="0" type="number" name="precio_dia" class="form-control" id="exampleInputEmail1" >
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
            <textarea name="observaciones" id="input" class="form-control" rows="3" required="required"></textarea>
          </div>


          <div class="col-lg-12" style="padding-bottom: 15px;">
            <a id="btn2" href="#datos1" aria-controls="datos1" role="tab" data-toggle="tab" onclick="selectDatos2()" class="siguiente btn btn-md btn-primary">Atras</a>
            <a id="btn4" href="#datos4" aria-controls="datos4" role="tab" data-toggle="tab" onclick="selectDatos2()" class="siguiente btn btn-md btn-primary">Seguiente</a>

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

                        </tbody>
                      </table>	 

                    </div>


                  </div>


                  <div role="tabpanel" class="tab-pane" id="datos4">
                    <div class="col-md-6" id="requisitos"><br>	
                      <h4 class="text-center">Requisitos</h4>   <br>  
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus facere commodi excepturi ipsum alias nobis, error! Porro dolore, amet unde itaque non dicta doloum tempora dignissimos molestiae cum, impedit autem, ad esse id consequatur quidem excepturi quisquam. Deleniti sint, ipsam natus officiis sunt quod? <br>
                      <div>	Loriae voluptatum ipsam quos? Voluptatum perferendis expedita, repellendus voluptate quidem esse, corporis voluptas harum? Culpa odit, praesentium, repudiandae libero voluptate dolore maxime illum!</div>
                      <br>
                      <div>  Loriae voluptatum ipsam quos? Voluptatum perferendis expedita, repellendus voluptate quidem esse, corporis voluptas harum? Culpa odit, praesentium, repudiandae libero voluptate dolore maxime illum!</div>
                      <br>
                      <div>  Loriae voluptatum ipsam quos? Voluptatum perferendis expedita, repellendus voluptate quidem esse, corporis voluptas harum? Culpa odit, praesentium, repudiandae libero voluptate dolore maxime illum!</div>
                      <br><br>
                      <div class="form-group col-md-12">
                        <div class="checkbox">
                         <input type="checkbox" class="styled" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                         <label class="aceptar_terminos"><b>Cumplo a cabalidad con los requisitos</b></label>
                       </div>
                     </div>


                   </div>

                   <div class="col-md-6"><br><br><br>{!! HTML::image("img/hombreycarro.jpg","",array("class"=>"img-responsive img-thumbnail")) !!}	<br><br><br></div>

                   <div class="col-md-12">	

                     <div class="form-group col-md-12">
                       <a id="btn2" href="#datos2" aria-controls="datos1" role="tab" data-toggle="tab" onclick="selectDatos2()" class="siguiente btn btn-md btn-primary">Atras</a>	

                       {!! Form::submit('Postular mi Vehículo!',array('class' => 'btn btn-primary btn-md')) !!}	
                     </div>
                   </div>


                 </div>
               </div>

               {!! Form::close() !!}

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



@if ($status=="guardado")

  <script type="text/javascript">
  $(document).ready(function() {
    swal({   title: "<h3 class='title-h1-cam'>Sus datos han sido registrados correctamente</h3>",   text: "<b>Pronto nos comunicaremos con usted</b>",   html: true });
  });
</script>

@else
<script type="text/javascript">
 $(document).ready(function() {
  swal({   title: "<h3 class='title-h1-cam'>Gana ingresos adicionales de forma <b>segura</b> con tu automóvil.</h3>",   text: "<b>Si quieres realizar el trámite para inscribir tu vehículo en alquilerdeautomoviles.com.co debes completar los campos de este formulario y aceptar los términos y requisitos que aquí aparecen.</b>",   html: true });
});
</script>
@endif

<script>
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  e.target // newly activated tab
  e.relatedTarget // previous active tab
})
</script>




@stop



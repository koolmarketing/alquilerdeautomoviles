@extends('templates.master')

@section('title')
Carro
@stop

@section('contenido')


 <!-- =========================
       Header
       ============================== -->
       <section class="header-pages alquiler">

        <!-- *****  Logo ***** -->
        <div class="logo-container text-center">
          <a href="#">
            <img src="{!! URL::to('/')!!}/img/logo-header.png" class="logo-banner" width="220px" alt="">
          </a>
        </div>
        <div id="titulo">
          <h1 class="title-center"> {!! $carro->marca !!} {!! $carro->linea !!} {!! $carro->modelo !!} </h1>
        </div>


      </section> <!-- *** end Header *** -->

      <p><br></p>

      <section class="container">
        <div class="col-md-6">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">

                <img src="{!! URL::to('/') !!}/uploads/img/{!! $carro->foto_1 !!}"  alt="...">
                
              </div>
              @if (isset($carro->foto_2))
              <div class="item">
                <img src="{!! URL::to('/') !!}/uploads/img/{!! $carro->foto_2 !!}" alt="...">  
              </div>
              @endif

              @if (isset($carro->foto_3))
              <div class="item">
                <img src="{!! URL::to('/') !!}/uploads/img/{!! $carro->foto_3 !!}" alt="...">  
              </div>
              @endif
              
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br>

          
          <a href="{!! URL::to('/') !!}/contratarvehiculo/{!! $carro->id !!}" class="btn btn-primary btn-lg">Contratar Vehículo</a>


        </div> 

        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item">Modelo: <span class="pull-right">{!! $carro->modelo !!}</span></li>            
            <li class="list-group-item">Capacidad: <span class="pull-right">{!! $carro->pasajeros !!} pasajeros</span></li>
            <li class="list-group-item">Precio por día: <span class="pull-right">{!! $carro->precio_dia !!}</span></li>
<!--             <button class="btn btn-primary btn-md btn-block" id="more-info"><h4 class="title-w">Ver más Información</h4></button>
-->
</ul>



<ul class="list-group">
  <li class="list-group-item text-center">Requesitos</li>
  <li class="list-group-item">Documento: <span class="pull-right">Cédula de Ciudadanía o Pasaporte</span></li>
  <li class="list-group-item">Licencia de conducción vigente: <span class="pull-right">(nacional o extranjera)</span></li>
  <li class="list-group-item">Depósito: <span class="pull-right">1.600.000</span></li>
</ul>


         <!--  <button class="btn btn-success btn-lg pull-right" id="btn-mostrar">Más Detalles</button>
       -->
       <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Más detalles
      </button>
      <div class="collapse" id="collapseExample">

        <br><br>
        <div class='list-group list-pop col-md-7'><a href='#' class='list-group-item'><b>Marca:</b> <span class='pull-right'>{!! $carro->marca !!}</span> </a><a href='#' class='list-group-item'><b>Linea:</b> <span class='pull-right'>{!! $carro->linea !!}</span> </a><a href='#' class='list-group-item'><b>Modelo:</b><span class='pull-right'>{!! $carro->modelo !!}</span></a><a href='#' class='list-group-item'><b>Color:</b><span class='pull-right'>{!! $carro->color !!}</span></a> <a href='#' class='list-group-item'><b>Transmisión:</b><span class='pull-right'>{!! $carro->transmision !!}</span></a> <a href='#' class='list-group-item'><b>Combustible:</b><span class='pull-right'>{!! $carro->combustible !!}</span></a><a href='#' class='list-group-item'><b>Pasajeros:</b><span class='pull-right'>{!! $carro->pasajeros !!}</span></a> <a href='#' class='list-group-item'><b>Precio por día:</b><span class='pull-right'>{!! $carro->precio_dia !!}</span></a></div>



        <div class='list-group list-pop col-md-5'> <a href='#' class='list-group-item'>Aire acondicionado
          <span class='pull-right'>
            @if ($carro->aire_acondicionado=="1")
            <i class='icon-check'></i>
            @else
            <i class='icon-thumbs-down-1'></i>
            @endif       
          </span>
        </a>  
        <a href='#' class='list-group-item'>Frenos ABS
          <span class='pull-right'>
            @if ($carro->freno_abs=="1")
            <i class='icon-check'></i>
            @else
            <i class='icon-thumbs-down-1'></i>
            @endif

          </span></a>

          <a href='#' class='list-group-item'>4x4
            <span class='pull-right'>
              @if ($carro->_4x4=="1")
              <i class='icon-check'></i>
              @else
              <i class='icon-thumbs-down-1'></i>
              @endif

            </span></a>

            <a href='#' class='list-group-item'>Cojinería de Cuero
              <span class='pull-right'>
                @if ($carro->cojineria_cuero=="1")
                <i class='icon-check'></i>
                @else
                <i class='icon-thumbs-down-1'></i>
                @endif

              </span></a>

              <a href='#' class='list-group-item'>Airbag Conductor
                <span class='pull-right'>
                  @if ($carro->airbag_conductor=="1")
                  <i class='icon-check'></i>
                  @else
                  <i class='icon-thumbs-down-1'></i>
                  @endif

                </span></a>

                <a href='#' class='list-group-item'>Airbag Copiloto
                  <span class='pull-right'>
                    @if ($carro->airbag_copiloto=="1")
                    <i class='icon-check'></i>
                    @else
                    <i class='icon-thumbs-down-1'></i>
                    @endif

                  </span></a>

                  <a href='#' class='list-group-item'>Permite Mascotas
                    <span class='pull-right'>
                      @if ($carro->mascotas=="1")
                      <i class='icon-check text-success'></i>
                      @else
                      <i class='icon-thumbs-down-1'></i>
                      @endif

                    </span></a>

                    <a href='#' class='list-group-item'>Entrega a domicilio
                      <span class='pull-right'>
                        @if ($carro->entrega_domicilio=="1")
                        <i class='icon-check'></i>
                        @else
                        <i class='icon-thumbs-down-1'></i>
                        @endif

                      </span></a>

                      <a href='#' class='list-group-item'>Radio
                        <span class='pull-right'>
                          @if ($carro->radio=="1")
                          <i class='icon-check'></i>
                          @else
                          <i class='icon-thumbs-down-1'></i>
                          @endif

                        </span></a>

                        <a href='#' class='list-group-item'>CD/MP3
                          <span class='pull-right'>
                            @if ($carro->cd_mp3=="1")
                            <i class='icon-check'></i>
                            @else
                            <i class='icon-thumbs-down-1'></i>
                            @endif

                          </span></a>


                          <a href='#' class='list-group-item'>USB/MP3
                            <span class='pull-right'>
                              @if ($carro->usb_mp3=="1")
                              <i class='icon-check'></i>
                              @else
                              <i class='icon-thumbs-down-1'></i>
                              @endif

                            </span></a>

                            <a href='#' class='list-group-item'>Vidrios Eléctricos
                              <span class='pull-right'>
                                @if ($carro->vidrios_electricos=="1")
                                <i class='icon-check'></i>
                                @else
                                <i class='icon-thumbs-down-1'></i>
                                @endif

                              </span></a>

                              <a href='#' class='list-group-item'>Rastreador Satelital
                                <span class='pull-right'>
                                  @if ($carro->rastreador=="1")
                                  <i class='icon-check'></i>
                                  @else
                                  <i class='icon-thumbs-down-1'></i>
                                  @endif

                                </span></a>

                                <a href='#' class='list-group-item'>Rines de Lujo
                                  <span class='pull-right'>
                                    @if ($carro->rines_lujo=="1")
                                    <i class='icon-check'></i>
                                    @else
                                    <i class='icon-thumbs-down-1'></i>
                                    @endif

                                  </span></a>

                                  <a href='#' class='list-group-item'>DVD
                                    <span class='pull-right'>
                                      @if ($carro->dvd=="1")
                                      <i class='icon-check'></i>
                                      @else
                                      <i class='icon-thumbs-down-1'></i>
                                      @endif

                                    </span></a>

                                    <a href='#' class='list-group-item'>Full Equipo
                                      <span class='pull-right'>
                                        @if ($carro->full_equipo=="1")
                                        <i class='icon-check'></i>
                                        @else
                                        <i class='icon-thumbs-down-1'></i>
                                        @endif

                                      </span></a>
                                    </div>

                                  </div>
                                </div>







                              </section>




                              @stop


                              @section('add_scripts')
                              <script type="text/javascript">


                                $("#btn-mostrar").click(function(){
                                  $("#delalles").toggle();
                                });


                                $("#more-info").click(function(event) {
                                  swal({ 
                                    title:"<h3 class='h3-grey-title'>Información general</h3>", 
                                    text: "<div class='list-group list-pop col-md-7'><a href='#' class='list-group-item'><b>Marca:</b> <span class='pull-right'>Marca</span> </a><a href='#' class='list-group-item'><b>Linea:</b> <span class='pull-right'>Linea</span> </a><a href='#' class='list-group-item'><b>Modelo:</b><span class='pull-right'>Modelo</span></a><a href='#' class='list-group-item'><b>Color:</b><span class='pull-right'>Color</span></a> <a href='#' class='list-group-item'><b>Transmisión:</b><span class='pull-right'>Transmisión</span></a> <a href='#' class='list-group-item'><b>Combustible:</b><span class='pull-right'>Combustible</span></a><a href='#' class='list-group-item'><b>Pasajeros:</b><span class='pull-right'>Pasajeros</span></a> <a href='#' class='list-group-item'><b>Precio por día:</b><span class='pull-right'>Valor</span></a></div><div class='list-group list-pop col-md-5'> <a href='#' class='list-group-item'>Aire acondicionado<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Frenos ABS<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Cojinería de Cuero<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Airbag Conductor<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Airbag Copiloto<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Permite mascotas<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Entrega a domicilio<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>Radio<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>CD/MP3<span class='pull-right'><i class='icon-check'></i></span></a>  <a href='#' class='list-group-item'>USB/MP3<span class='pull-right'><i class='icon-check'></i></span></a></div>", html: true });
});

</script>


@stop
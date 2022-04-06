<?php 
  include("../administracion.php");
  require("../config/connect.php");
  include("sql_estadisticas.php");

  $totales=(array)$total_municipio;
//VARIABLES CON LAS CANTIDAD EN MUNICIPIOS Y PARROQUIAS
  //ARISMENDI
   /*Municipio*/$arismendi = 0; /*Parroquia La Asuncion*/ $arismendip1 = 0;
  //FIN ARISMENDI

  //DIAZ
   /*Municipio*/$diaz = 0; /*Parroquia San Juan*/$diazp1=0; /*Parroquia Zabala*/$diazp2=0;
  //FIN DIAZ 

  //GOMEZ
   /*Municipio*/$gomez = 0; 
   /*Parroquia Santa Ana*/$gomezp1=0; /*Parroquia Guevara*/$gomezp2=0;
   /*Parroquia Matasiete*/$gomezp3=0; /*Parroquia Bolivar*/$gomezp4=0; /*Parroquia Sucre*/$gomezp5=0;
  //FIN GOMEZ

  //MANEIRO
   /*Municipio*/$maneiro = 0; /*Parroquia Pampatar*/$maneirop1=0; /*Parroquia Aguirre*/$maneirop2=0;
  //FIN MANEIRO
   
  //MARCANO
   /*Municipio*/$marcano = 0; /*Parroquia Juan Griego*/$marcanop1=0; /*Parroquia Adrian*/$marcanop2=0;
  //FIN MARCANAO
   
  //MARIÑO
   /*Municipio*/$marino = 0; /*Parroquia Porlamar*/$marinop1=0;
  //FIN MARIÑO
  
  //PENINSULA DE MACANAO
   /*Municipio*/$pmacanao = 0; /*Parroquia Boca del Rio*/$pmacanaop1=0; /*Parroquia San Francisco*/$pmacanaop2=0;
  //FIN PENINSULA DE MACANAO

  //VILLALBA
   /*Municipio*/$villalba = 0; /*Parroquia Coche*/$villalbap1=0; /*Parroquia V Fuentes*/$villalbap2=0;
  //FIN VILLALBA

  //TUBORES
   /*Municipio*/$tubores = 0; /*Parroquia PPiedras*/$tuboresp1=0; /*Parroquia Los Barales*/$tuboresp2=0;
  //FIN TUBORES

  //ANTOLIN DEL CAMPO
   /*Municipio*/$antolin = 0; /*Parroquia Paraguachi*/$antolinp1=0;
  //FIN ANTOLIN DEL CAMPO

  //GARCIA
   /*Municipio*/$garcia = 0; /*Parroquia El Valle*/$garciap1=0; /*Parroquia FFajardo*/$garciap2=0;
  //FIN GARCIA
//FIN VARIABLES CON LAS CANTIDAD EN MUNICIPIOS Y PARROQUIAS
   
  for ($i=0; $i < count($totales) ; $i++) { 
    switch ($totales[$i]->municipio_cod) {
      case 1: $arismendi += $totales[$i]->total; 
        if($totales[$i]->parroquia_cod==1) $arismendip1 = $totales[$i]->total;
        break;
      case 2: $diaz += $totales[$i]->total; 
        if($totales[$i]->parroquia_cod==1) $diazp1=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==2) $diazp2=$totales[$i]->total;
        break; 
      case 3: $gomez += $totales[$i]->total; 
        if($totales[$i]->parroquia_cod==1) $gomezp1=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==2) $gomezp2=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==3) $gomezp3=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==4) $gomezp4=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==5) $gomezp5=$totales[$i]->total;
        break;
      case 4: $maneiro += $totales[$i]->total; 
        if($totales[$i]->parroquia_cod==1) $maneirop1=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==2) $maneirop2=$totales[$i]->total;
        break;
      case 5: $marcano += $totales[$i]->total; 
        if($totales[$i]->parroquia_cod==1) $marcanop1=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==2) $marcanop2=$totales[$i]->total;
        break;
      case 6: $marino += $totales[$i]->total;
        if($totales[$i]->parroquia_cod==1) $marinop1 = $totales[$i]->total;
        break;
      case 7: $pmacanao += $totales[$i]->total; 
        if($totales[$i]->parroquia_cod==1) $pmacanaop1=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==2) $pmacanaop2=$totales[$i]->total;
        break;
      case 8: $villalba += $totales[$i]->total; 
        if($totales[$i]->parroquia_cod==1) $villalbap1=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==2) $villalbap2=$totales[$i]->total;
        break;
      case 9: $tubores += $totales[$i]->total; 
        if($totales[$i]->parroquia_cod==1) $tuboresp1=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==2) $tuboresp2=$totales[$i]->total;
        break;
      case 10: $antolin += $totales[$i]->total; 
        if($totales[$i]->parroquia_cod==1) $antolinp1=$totales[$i]->total;
        break;
      case 11: $garcia += $totales[$i]->total; 
        if($totales[$i]->parroquia_cod==1) $garciap1=$totales[$i]->total;
        if($totales[$i]->parroquia_cod==2) $garciap2=$totales[$i]->total;
        break;
      default:
        break;
    }
  }
?>
  <script type="text/javascript">
    $("#topsito").removeClass('d-none');
  </script>     

    <div class="col-12 mx-auto">
        <div class="col-lg-10 mx-auto ">
          <img src="../Imagenes/franja.jpg" class="img-fluid">
          <h5 class="text-primary text-center mt-3">Estadísticas de Personas Censadas Solicitantes</h5>
        </div>
        
      <!-- CONTENEDOR DE LO DE ADENTRO CON LAS ESTADISTICAS-->
        <div class="container">
        <!-- BLOQUES DEL INICIO -->
          <div class="row justify-content-center my-3">
              <div class="col-lg-4 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
                <div class="col-7 float-left mt-4">
                  <p class="display-4 text-primary">
                    <?php foreach ($total_censado as $censado): ?>
                      <?php echo $censado->total; ?>
                    <?php endforeach ?>
                  </p>
                </div>
                <div class="p-2 col-5 float-left">
                  <img src="../Imagenes/iconoFDV.png" class="img-fluid" style="height: 95px">
                </div>
                <div class="col-12 p-0">
                  <span class="text-muted">N# DE PERSONAS CENSADAS</span>
                </div>
              </div>
          </div>
        <!-- BLOQUES DEL INICIO -->

        <!-- BLOQUE PARA GENERAR EL REPORTE -->
          <div class="col-lg-8 col-md-10 col-sm-11 col-12 mx-auto shadow-sm my-4 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
            <form class="m-auto col-12" id="freporte">
              <h5 class="text-center mb-3" style="font-size: 1.5em">Generar Reporte</h5>
              <h6 class="text-muted text-center">Deje en blanco Municipio o Parroquia si no desea filtrar por dirección de hogar</h6>
              <div class="form-group text-justify col-12 row justify-content-center m-auto">
                <?php if($u_nivel==1): ?>
                <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-1">   
                    <label class="text-muted" style="font-size: 1.2em">Municipio:</label>
                    <select type="text" class="form-control" name="municipio_s" id="municipio_s">
                      <option value="0">--Elija un Municipio--</option>
                      <option value="10">Antolín del Campo</option>
                      <option value="1">Arismendi</option>
                      <option value="2">Díaz</option>
                      <option value="11">García</option>
                      <option value="3">Gómez</option>
                      <option value="4">Maneiro</option>
                      <option value="5">Marcano</option>
                      <option value="6">Mariño</option>
                      <option value="7">Península de Macanao</option>
                      <option value="9">Tubores</option>
                      <option value="8">Villalba</option>
                    </select>
                </div>
              <?php else: ?>
                <div class="">
                  <input type="hidden" id="municipio_s" name="municipio_s" class="form-control" value="<?php echo $u_municipio ?>">
                </div>
              <?php endif; ?>
                <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-1">   
                    <label class="text-muted" style="font-size: 1.2em">Parroquía:</label>
                    <select type="text" class="form-control" name="parroquia_s" id="parroquia_s" disabled="">
                      <option value="0">--Elija una Parroquia--</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-1"> 
                  <label class="text-muted" style="font-size: 1.2em">Año a Evaluar:</label>
                  <input type="number" name="rayo" id="rayo" class="form-control" placeholder="Ingrese el Año" value="<?php echo date('Y') ?>">
                </div>
                <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-1">   
                    <label class="text-muted" style="font-size: 1.2em">Periodo:</label>
                    <select class="form-control" id="rperiodo" name="rperiodo">
                        <option value="">Seleccione el Periodo:</option>
                        <option value="Anual">Anual</option>
                        <option value="Cuatrimestral">Cuatrimestral</option>
                        <option value="Trimestral">Trimestral</option>
                        <option value="Bimensual">Bimensual</option>
                        <option value="Mensual">Mensual</option>
                        <option value="Semanal">Semanal</option>
                        <option value="Diario">Diario</option>
                    </select>
                </div>
              </div>
              <div class="form-group text-center col-12 mt-2">
                  <button type="submit" class="btn btn-success">Enviar</button>
              </div>
            </form>
          </div>
        <!-- FIN BLOQUE PARA GENERAR EL REPORTE -->

        <!-- RONDA DE CONTADORES ESPECIFICOS -->
           <div class="row justify-content-center my-3">
            <!-- CONTADOR ESPECIFICOS DE CENSADOS EN ANTOLIN DEL CAMPO -->
              <?php if(($u_nivel==1)OR($u_municipio==10)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio Antolin del Campo:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold ">La Plaza de Paraguachi 
                    <span class="float-right"><?php echo $antolinp1; ?></span>
                  </h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($antolin!=0)$porcentaje = $antolinp1*100/$antolin; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $antolinp1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $antolin ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $antolin ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $antolin ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR ESPECIFICOS EN ANTOLIN DEL CAMPO -->

            <!-- CONTADOR ESPECIFICOS EN ARISMENDI -->
              <?php if(($u_nivel==1)OR($u_nivel==1)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio Arismendi:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold ">La Asunción 
                    <span class="float-right"><?php echo $arismendip1 ?></span>
                  </h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($arismendi!=0)$porcentaje = $arismendip1*100/$arismendi; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $arismendip1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $arismendi ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $arismendi ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $arismendi ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR ESPECIFICOS EN ARISMENDI -->

            <!-- CONTADOR ESPECIFICOS EN DIAZ -->
              <?php if(($u_nivel==1)OR($u_municipio==2)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio Díaz:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold">San Juan Bautista <span class="float-right"><?php echo $diazp1 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($diaz!=0)$porcentaje = $diazp1*100/$diaz; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $diazp1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $diaz ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Zabala <span class="float-right"><?php echo $diazp2 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($diaz!=0)$porcentaje = $diazp2*100/$diaz; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #3FA637" aria-valuenow="<?php echo $diazp2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $diaz ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $diaz ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $diaz ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR EN DIAZ -->

            <!-- CONTADOR ESPECIFICOS EN GARCIA -->
              <?php if(($u_nivel==1)OR($u_municipio==11)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio García:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold">Valle del Espiritu Santo <span class="float-right"><?php echo $garciap1 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($garcia!=0)$porcentaje = $garciap1*100/$garcia; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $garciap1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $garcia ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Francisco Fajardo <span class="float-right"><?php echo $garciap2 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($garcia!=0)$porcentaje = $garciap2*100/$garcia; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #3FA637" aria-valuenow="<?php echo $garciap2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $garcia ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $garcia ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $garcia ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR ESPECIFICOS EN GARCIA -->

            <!-- CONTADOR ESPECIFICOS EN GOMEZ -->
              <?php if(($u_nivel==1)OR($u_municipio==3)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio Gómez:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold">Santa Ana <span class="float-right"><?php echo $gomezp1 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($gomez!=0)$porcentaje = $gomezp1*100/$gomez; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $gomezp1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $gomez ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Guevara <span class="float-right"><?php echo $gomezp2 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($gomez!=0)$porcentaje = $gomezp2*100/$gomez; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #3FA637" aria-valuenow="<?php echo $gomezp2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $gomez ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Mata Siete <span class="float-right"><?php echo $gomezp3 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($gomez!=0)$porcentaje = $gomezp3*100/$gomez; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $gomezp3 ?>" aria-valuemin="0" aria-valuemax="<?php echo $gomez ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Bolivar <span class="float-right"><?php echo $gomezp4 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($gomez!=0)$porcentaje = $gomezp4*100/$gomez; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #3FA637" aria-valuenow="<?php echo $gomezp4 ?>" aria-valuemin="0" aria-valuemax="<?php echo $gomez ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sucre <span class="float-right"><?php echo $gomezp5 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($gomez!=0)$porcentaje = $gomezp5*100/$gomez; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $gomezp5 ?>" aria-valuemin="0" aria-valuemax="<?php echo $gomez ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $gomez ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $gomez ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR ESPECIFICOS EN GOMEZ -->

            <!-- CONTADOR ESPECIFICOS EN MANEIRO -->
              <?php if(($u_nivel==1)OR($u_municipio==4)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio Maneiro:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold">Pampatar <span class="float-right"><?php echo $maneirop1 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($maneiro!=0)$porcentaje = $maneirop1*100/$maneiro; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $maneirop1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $maneiro ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Aguirre <span class="float-right"><?php echo $maneirop2 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($maneiro!=0)$porcentaje = $maneirop2*100/$maneiro; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #3FA637" aria-valuenow="<?php echo $maneirop2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $maneiro ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $maneiro ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $maneiro ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR ESPECIFICOS EN MANEIRO -->

            <!-- CONTADOR ESPECIFICOS EN MARCANO -->
              <?php if(($u_nivel==1)OR($u_municipio==5)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio Marcano:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold">Juan Griego <span class="float-right"><?php echo $marcanop1 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($marcano!=0)$porcentaje = $marcanop1*100/$marcano; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $marcanop1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $marcano ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Adrian <span class="float-right"><?php echo $marcanop2 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($marcano!=0)$porcentaje = $marcanop2*100/$marcano; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #3FA637" aria-valuenow="<?php echo $marcanop2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $marcano ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $marcano ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $marcano ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR ESPECIFICOS EN MARCANO -->

            <!-- CONTADOR ESPECIFICOS EN MARIÑO -->
              <?php if(($u_nivel==1)OR($u_municipio==6)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio Mariño:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold">Porlamar <span class="float-right"><?php echo $marinop1 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($marino!=0)$porcentaje = $marinop1*100/$marino; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $marinop1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $marino ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $marino ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $marino ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR ESPECIFICOS EN MARIÑO -->

            <!-- CONTADOR ESPECIFICOS EN PENINSULA DE MACANAO -->
              <?php if(($u_nivel==1)OR($u_municipio==7)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio Península de Macanao:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold">Boca del Río <span class="float-right"><?php echo $pmacanaop1 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($pmacanao!=0)$porcentaje = $pmacanaop1*100/$pmacanao; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $pmacanaop1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $pmacanao ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">San Francisco <span class="float-right"><?php echo $pmacanaop2 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($pmacanao!=0)$porcentaje = $pmacanaop2*100/$pmacanao; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #3FA637" aria-valuenow="<?php echo $pmacanaop2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $pmacanao ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $pmacanao ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $pmacanao ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR ESPECIFICOS EN PENINSULA DE MACANAO -->

            <!-- CONTADOR ESPECIFICOS EN TUBORES -->
              <?php if(($u_nivel==1)OR($u_municipio==9)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio Tubores:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold">Punta de Piedras <span class="float-right"><?php echo $tuboresp1 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($tubores!=0)$porcentaje = $tuboresp1*100/$tubores; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $tuboresp1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $tubores ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Los Barales <span class="float-right"><?php echo $tuboresp2 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($tubores!=0)$porcentaje = $tuboresp2*100/$tubores; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #3FA637" aria-valuenow="<?php echo $tuboresp2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $tubores ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $tubores ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $tubores ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR ESPECIFICOS EN TUBORES -->

            <!-- CONTADOR ESPECIFICOS EN VILLALBA -->
              <?php if(($u_nivel==1)OR($u_municipio==8)): ?>
               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Municipio Villalba:</h6>
                </div>
                <div class="card-body border">
                  <h4 class="small font-weight-bold">San Pedro de Coche <span class="float-right"><?php echo $villalbap1 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($villalba!=0)$porcentaje = $villalbap1*100/$villalba; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #FFEC0E" aria-valuenow="<?php echo $villalbap1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $villalba ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Vicente Fuentes <span class="float-right"><?php echo $villalbap2 ?></span></h4>
                  <div class="progress mb-4">
                    <?php  $porcentaje=0; if($villalba!=0)$porcentaje = $villalbap2*100/$villalba; ?>
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $porcentaje ?>%; background-color: #3FA637" aria-valuenow="<?php echo $villalbap2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $villalba ?>"></div>
                  </div>
                  <h4 class="small font-weight-bold">Total de Censados <span class="float-right"><?php echo $villalba ?></span></h4>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="<?php echo $villalba ?>"></div>
                  </div>
                </div>
               </div>
              <?php endif; ?>
            <!-- FIN CONTADOR ESPECIFICOS EN VILLALBA -->
           </div>
        <!-- FIN RONDA DE CONTADORES ESPECIFICOS -->

        <!-- CONTENEDORES DE GRAFICOS CON CHARTS JS -->
           <div class="row col-12 justify-content-center mb-3">

            <!-- CONTENEDDOR YA POR AGRUPACION O PERSONAS POR MESES -->
              <?php if($u_nivel==1): ?>
                <div class="col-lg-6 col-md-10 col-sm-12 mt-2">
                  <div class="card rounded">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Censados por Mes: 
                            <select id="m_estadistica" class="font-weight-bold" style="background-color: transparent; border:0;">
                                <option value="0">Municipio</option>
                                <option value="10">Antolín del Campo</option>
                                <option value="1">Arismendi</option>
                                <option value="2">Díaz</option>
                                <option value="11">García</option>
                                <option value="3">Gómez</option>
                                <option value="4">Maneiro</option>
                                <option value="5">Marcano</option>
                                <option value="6">Mariño</option>
                                <option value="7">Península de Macanao</option>
                                <option value="9">Tubores</option>
                                <option value="8">Villalba</option>
                            </select>
                        </h6>
                      </div>
                      <div class="card-body px-1" id="canva_mes">
                          <canvas id="total_mes"></canvas>
                      </div>
                  </div>
                </div>
              <?php else: ?>
                <div class="col-lg-6 col-md-10 col-sm-12 mt-2">
                  <div class="card rounded">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Censados por Mes: 
                            <input id="m_estadistica" class="font-weight-bold" style="background-color: transparent; border:0;" value="<?php echo $lateral ?>" disabled="true"></input>
                        </h6>
                      </div>
                      <div class="card-body px-1" id="canva_mes">
                          <canvas id="total_mes"></canvas>
                      </div>
                  </div>
                </div>
              <?php endif; ?>
            <!-- FIN CONTENEDDOR YA POR AGRUPACION O PERSONAS POR MESES -->

            <!-- CONTENEDDOR YA POR AGRUPACION O PERSONAS POR DIA -->
              <?php if($u_nivel==1): ?>
                <div class="col-lg-6 col-md-10 col-sm-12 mt-2">
                  <div class="card rounded">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Censados por Día: 
                            <select id="d_estadistica" class="font-weight-bold" style="background-color: transparent; border:0;">
                                <option>Municipio</option>
                                <option value="10">Antolín del Campo</option>
                                <option value="1">Arismendi</option>
                                <option value="2">Díaz</option>
                                <option value="11">García</option>
                                <option value="3">Gómez</option>
                                <option value="4">Maneiro</option>
                                <option value="5">Marcano</option>
                                <option value="6">Mariño</option>
                                <option value="7">Península de Macanao</option>
                                <option value="9">Tubores</option>
                                <option value="8">Villalba</option>
                            </select>
                        </h6>
                      </div>
                      <div class="card-body px-1" id="canva_dia">
                          <canvas id="total_dia"></canvas>
                      </div>
                  </div>
                </div>
              <?php else: ?>
                <div class="col-lg-6 col-md-10 col-sm-12 mt-2">
                  <div class="card rounded">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Censados por Día: 
                            <input id="d_estadistica" class="font-weight-bold" style="background-color: transparent; border:0;" value="<?php echo $lateral ?>" disabled="true"></input>
                        </h6>
                      </div>
                      <div class="card-body px-1" id="canva_dia">
                          <canvas id="total_dia"></canvas>
                      </div>
                  </div>
                </div>
              <?php endif; ?>
            <!-- FIN CONTENEDDOR YA POR AGRUPACION O PERSONAS POR DIA -->
           </div>
        <!-- FIN CONTENEDORES DE GRAFICOS CON CHARTS JS -->

        </div>
      <!-- FIN CONTENEDOR DONDE ESTAN LOS ESTADISTICOS -->
    </div>
<!-- PARTE QUE VIENE LUEGO DEL INCLUDE DE ADMINISTRACION.PHP -->
  </div>
</div>
    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
</body>
</html>

<script type="text/javascript" src="../js/jquery.ajax.js"></script>
<script type="text/javascript" src="validaciones_personas.js"></script>
<?php include("charts_censo.php"); ?>

<?php if($u_nivel==2): ?>
  <script type="text/javascript">
    $.ajax({
      data:{'municipio': $("#municipio_s").val(),
          'proceso': 1},
      url:'../config/ajax_auto.php',
      type:'post',
      success: function(respuesta){
        console.log(respuesta);
        var datos=JSON.parse(respuesta),
        select=document.getElementById("parroquia_s");
        $("#parroquia_s").empty();
        $("#parroquia_s").append('<option selected="selected" value="">--Elegir Parroquia--</option>');
        for (var i = 0; i <= datos.length-1; i++) {
          var newoption=document.createElement("option");
          newoption.setAttribute("value",datos[i]["PARROQUIA_COD"]);
          newoption.setAttribute("label",datos[i]["PARROQUIA_NOMBRE"]);
          select.appendChild(newoption);
        }
        $("#parroquia_s").removeAttr("disabled");
      }
    });
  </script>
<?php endif; ?>
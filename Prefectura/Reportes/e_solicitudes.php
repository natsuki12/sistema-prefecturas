<?php 
  include("../administracion.php");
  require("../config/connect.php");
  include("sql_estadisticas.php");

  $totales=(array)$total_solicitudes;
  //SOLICITUDES
  $fedevida = 0; $dependencia = 0; $extravio = 0; $eventos = 0;
  $mudanza = 0; $permiso = 0; $conducta = 0; $equipaje = 0;

  for ($i=0; $i < count($totales) ; $i++) { 
    switch ($totales[$i]->tipo_tramite) {
      case "F-PF-01": $mudanza = $totales[$i]->total; break;
      case "F-PF-02": $equipaje = $totales[$i]->total; break;
      case "F-PF-03": $permiso = $totales[$i]->total; break;
      case "F-PF-04": $fedevida = $totales[$i]->total; break;
      case "F-PF-05": $dependencia = $totales[$i]->total; break;
      case "F-PF-06": $conducta = $totales[$i]->total; break;
      case "F-PF-07": $eventos = $totales[$i]->total; break;
      case "F-PF-08": $extravio = $totales[$i]->total; break;
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
          <h5 class="text-primary text-center mt-3">Estadísticas de Solicitudes Generadas</h5>
        </div>
      <!-- CONTENEDOR DE LO DE ADENTRO CON LAS ESTADISTICAS-->
        <div class="container">
        <!-- BLOQUES DEL INICIO -->
          <div class="row justify-content-center my-3">
              <!--<div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
                <div class="col-7 float-left mt-4">
                  <p class="display-4 text-primary">5000</p>
                </div>
                <div class="p-2 col-5 float-left">
                  <img src="/Prefectura/Imagenes/icono.png" class="img-fluid" style="height: 95px">
                </div>
                <div class="col-12 p-0">
                  <span class="text-muted">N# DE SOLICITUDES GENERADAS</span>
                </div>
              </div>-->

              <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
                <div class="col-7 float-left mt-4">
                  <p class="display-4 text-primary"><?php echo $fedevida ?></p>
                </div>
                <div class="p-2 col-5 float-left">
                  <img src="../Imagenes/iconoFDV.png" class="img-fluid" style="height: 95px">
                </div>
                <div class="col-12 p-0">
                  <span class="text-muted">N# DE SOLICITUDES: CONSTANCIA DE FE DE VIDA</span>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
                <div class="col-7 float-left mt-4">
                  <p class="display-4 text-primary"><?php echo $dependencia ?></p>
                </div>
                <div class="p-2 col-5 float-left">
                  <img src="../Imagenes/iconoCDE.png" class="img-fluid" style="height: 95px">
                </div>
                <div class="col-12 p-0">
                  <span class="text-muted">N# DE SOLICITUDES: CONSTANCIA DE DEPENDENCIA ECÓNOMICA</span>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
                <div class="col-7 float-left mt-4">
                  <p class="display-4 text-primary"><?php echo $extravio ?></p>
                </div>
                <div class="p-2 col-5 float-left">
                  <img src="../Imagenes/iconoCED.png" class="img-fluid" style="height: 95px">
                </div>
                <div class="col-12 p-0">
                  <span class="text-muted">N# DE SOLICITUDES: CONSTANCIA DE EXTRAVIO DE DOCUMENTOS</span>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
                <div class="col-7 float-left mt-4">
                  <p class="display-4 text-primary"><?php echo $eventos ?></p>
                </div>
                <div class="p-2 col-5 float-left">
                  <img src="../Imagenes/iconoCFE.png" class="img-fluid" style="height: 95px">
                </div>
                <div class="col-12 p-0">
                  <span class="text-muted">N# DE SOLICITUDES: CONSTANCIA DE FACTIBILIDAD DE EVENTOS</span>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
                <div class="col-7 float-left mt-4">
                  <p class="display-4 text-primary"><?php echo $mudanza ?></p>
                </div>
                <div class="p-2 col-5 float-left">
                  <img src="../Imagenes/iconoCM.png" class="img-fluid" style="height: 95px">
                </div>
                <div class="col-12 p-0">
                  <span class="text-muted">N# DE SOLICITUDES: CONSTANCIA DE MUDANZA</span>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
                <div class="col-7 float-left mt-4">
                  <p class="display-4 text-primary"><?php echo $permiso ?></p>
                </div>
                <div class="p-2 col-5 float-left">
                  <img src="../Imagenes/iconoPDV.png" class="img-fluid" style="height: 95px">
                </div>
                <div class="col-12 p-0">
                  <span class="text-muted">N# DE SOLICITUDES: CONSTANCIA DE PERMISO DE VIAJE</span>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
                <div class="col-7 float-left mt-4">
                  <p class="display-4 text-primary"><?php echo $conducta ?></p>
                </div>
                <div class="p-2 col-5 float-left">
                  <img src="../Imagenes/iconoCBC.png" class="img-fluid" style="height: 95px">
                </div>
                <div class="col-12 p-0">
                  <span class="text-muted">N# DE SOLICITUDES: CARTA DE BUENA CONDUCTA</span>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
                <div class="col-7 float-left mt-4">
                  <p class="display-4 text-primary"><?php echo $equipaje ?></p>
                </div>
                <div class="p-2 col-5 float-left">
                  <img src="../Imagenes/iconoCDR.png" class="img-fluid" style="height: 95px">
                </div>
                <div class="col-12 p-0">
                  <span class="text-muted">N# DE SOLICITUDES: CAMBIO DE RESIDENCIA - REGIMEN DE EQUIPAJE</span>
                </div>
              </div>
          </div>
        <!-- BLOQUES DEL INICIO -->

        <!-- BLOQUE PARA GENERAR EL REPORTE -->
          <div class="col-lg-8 col-md-10 col-sm-11 col-12 mx-auto shadow-sm my-4 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
            <form class="m-auto col-12" id="freporte">
              <h5 class="text-center mb-3" style="font-size: 1.5em">Generar Reporte</h5>
              <div class="form-group text-justify col-12 row justify-content-center m-auto">
                <?php if($u_nivel==1): ?>
                <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-1">   
                    <label class="text-muted" style="font-size: 1.2em">Prefectura:</label>
                    <select class="form-control" id="rprefectura" name="rprefectura">
                        <option value="0">Seleccionar Prefectura</option>
                        <option value="Global">Todas en Conjunto</option>
                        <option value="1">Prefectura Municipal de Antolin del Campo</option>
                        <option value="2">Prefectura Municipal de Arismendi</option>
                        <option value="3">Prefectura Municipal de Díaz</option>
                        <option value="4">Prefectura Municipal de García</option>
                        <option value="5">Prefectura Municipal de Gómez</option>
                        <option value="6">Prefectura Municipal de Maneiro</option>
                        <option value="7">Prefectura Municipal de Marcano</option>
                        <option value="8">Prefectura Municipal de Mariño</option>
                        <option value="9">Prefectura Municipal de Peninsula de Macanao</option>
                        <option value="10">Prefectura Municipal de Tubores</option>
                        <option value="11">Prefectura Municipal de Villalba</option>
                        <option value="22">Prefectura Parroquial de Zabala</option>
                        <option value="19">Prefectura Parroquial de Sucre</option>
                        <option value="18">Prefectura Parroquial de Simón Bolivar</option>
                        <option value="17">Prefectura Parroquial de Matasiete</option>
                        <option value="16">Prefectura Parroquial de Guevara</option>
                        <option value="13">Prefectura Parroquial de Aguirre</option>
                        <option value="12">Prefectura Parroquial de Adrian</option>
                        <option value="20">Prefectura Parroquial de San Francisco</option>
                        <option value="21">Prefectura Parroquial de Vicente Fuentes</option>
                        <option value="15">Prefectura Parroquial de Los Barales</option>
                        <option value="14">Prefectura Parroquial de Francisco Fajardo</option>
                    </select>
                </div>
                <?php else: ?>
                    <div class="">
                      <input type="hidden" name="rprefectura" class="form-control" value="<?php echo $u_prefectura ?>">
                    </div>
                <?php endif; ?>
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
                <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-1">   
                    <label class="text-muted" style="font-size: 1.2em">Tipo de Trámite:</label>
                    <select class="form-control" id="rtipo" name="rtipo">
                        <option value="">Seleccione un Tramite:</option>
                        <option value="Todos">Todos</option>
                        <option value="F-PF-02">Cambio de Residencia: Regimen de Equipaje</option>
                        <option value="F-PF-06">Carta de Buena Conducta</option>
                        <option value="F-PF-05">Constancia de Dependencia Economica</option>
                        <option value="F-PF-08">Constancia de Extravio de Documentos</option>
                        <option value="F-PF-07">Constancia de Factibilidad de Eventos</option>
                        <option value="F-PF-01">Constancia de Mudanza</option>
                        <option value="F-PF-03">Constancia de Permiso de Viaje</option>
                        <option value="F-PF-04">Constancia de Fe de Vida</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-1">   
                    <label class="text-muted" style="font-size: 1.2em">Estado de Trámite:</label>
                    <select class="form-control" id="restilo" name="restilo">
                        <option value="Ninguno">Ninguno</option>
                        <option value="Denegada">Denegada</option>
                        <option value="Procesando">Procesando</option>
                        <option value="Aceptada">Aceptada</option>
                    </select>
                </div>
              </div>
              <div class="form-group text-center col-12 mt-2">
                  <button type="submit" class="btn btn-success">Enviar</button>
              </div>
            </form>
          </div>
        <!-- FIN BLOQUE PARA GENERAR EL REPORTE -->

        <!-- CONTENEDORES DE GRAFICOS CON CHARTS JS -->
           <div class="row col-12 justify-content-center mb-3">

            <!-- CONTENEDDOR TOTAL DE SOLICITUD POR PREFECTURA -->
              <?php if($u_nivel==1): ?>
                <div class="col-lg-6 col-md-10 col-sm-12 mt-2">
                  <div class="card rounded">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Solicitudes:
                          <select id="p_estadistica" class="font-weight-bold" style="background-color: transparent; border:0;">
                                <option value="0">Seleccionar Prefectura</option>
                                <option value="1">Prefectura Municipal de Antolin del Campo</option>
                                <option value="2">Prefectura Municipal de Arismendi</option>
                                <option value="3">Prefectura Municipal de Díaz</option>
                                <option value="4">Prefectura Municipal de García</option>
                                <option value="5">Prefectura Municipal de Gómez</option>
                                <option value="6">Prefectura Municipal de Maneiro</option>
                                <option value="7">Prefectura Municipal de Marcano</option>
                                <option value="8">Prefectura Municipal de Mariño</option>
                                <option value="9">Prefectura Municipal de Peninsula de Macanao</option>
                                <option value="10">Prefectura Municipal de Tubores</option>
                                <option value="11">Prefectura Municipal de Villalba</option>
                                <option value="22">Prefectura Parroquial de Zabala</option>
                                <option value="19">Prefectura Parroquial de Sucre</option>
                                <option value="18">Prefectura Parroquial de Simón Bolivar</option>
                                <option value="17">Prefectura Parroquial de Matasiete</option>
                                <option value="16">Prefectura Parroquial de Guevara</option>
                                <option value="13">Prefectura Parroquial de Aguirre</option>
                                <option value="12">Prefectura Parroquial de Adrian</option>
                                <option value="20">Prefectura Parroquial de San Francisco</option>
                                <option value="21">Prefectura Parroquial de Vicente Fuentes</option>
                                <option value="15">Prefectura Parroquial de Los Barales</option>
                                <option value="14">Prefectura Parroquial de Francisco Fajardo</option>
                            </select>
                        </h6>
                      </div>
                      <div class="card-body px-1" id="canva_prefectura">
                          <canvas id="total_prefectura"></canvas>
                      </div>
                  </div>
                </div>
              <?php endif; ?>
            <!-- FIN CONTENEDDOR TOTAL DE SOLICITUD POR PREFECTURA -->

            <!-- CONTENEDDOR TOTAL DE SOLICITUD POR ESTADO -->
                <div class="col-lg-6 col-md-10 col-sm-12 mt-2">
                  <div class="card rounded">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Solicitudes por Estado</h6>
                      </div>
                      <div class="card-body px-1">
                          <canvas id="total_estado"></canvas>
                      </div>
                  </div>
                </div>
            <!-- FIN CONTENEDDOR TOTAL DE SOLICITUD POR ESTADO -->

            <!-- CONTENEDDOR TOTAL DE SOLICITUD POR MESES -->
              <?php if($u_nivel==1): ?>
                <div class="col-lg-6 col-md-10 col-sm-12 mt-2">
                  <div class="card rounded">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Solicitudes por Mes: 
                            <select id="m_estadistica" class="font-weight-bold" style="background-color: transparent; border:0;">
                                <option value="0">Seleccionar Prefectura</option>
                                <option value="Global">Todas en Conjunto</option>
                                <option value="1">Prefectura Municipal de Antolin del Campo</option>
                                <option value="2">Prefectura Municipal de Arismendi</option>
                                <option value="3">Prefectura Municipal de Díaz</option>
                                <option value="4">Prefectura Municipal de García</option>
                                <option value="5">Prefectura Municipal de Gómez</option>
                                <option value="6">Prefectura Municipal de Maneiro</option>
                                <option value="7">Prefectura Municipal de Marcano</option>
                                <option value="8">Prefectura Municipal de Mariño</option>
                                <option value="9">Prefectura Municipal de Peninsula de Macanao</option>
                                <option value="10">Prefectura Municipal de Tubores</option>
                                <option value="11">Prefectura Municipal de Villalba</option>
                                <option value="22">Prefectura Parroquial de Zabala</option>
                                <option value="19">Prefectura Parroquial de Sucre</option>
                                <option value="18">Prefectura Parroquial de Simón Bolivar</option>
                                <option value="17">Prefectura Parroquial de Matasiete</option>
                                <option value="16">Prefectura Parroquial de Guevara</option>
                                <option value="13">Prefectura Parroquial de Aguirre</option>
                                <option value="12">Prefectura Parroquial de Adrian</option>
                                <option value="20">Prefectura Parroquial de San Francisco</option>
                                <option value="21">Prefectura Parroquial de Vicente Fuentes</option>
                                <option value="15">Prefectura Parroquial de Los Barales</option>
                                <option value="14">Prefectura Parroquial de Francisco Fajardo</option>
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
                        <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Solicitudes por Mes: 
                            <input id="m_estadistica" class="font-weight-bold" style="background-color: transparent; border:0;" value="<?php echo $lateral ?>" disabled="true"></input>
                        </h6>
                      </div>
                      <div class="card-body px-1" id="canva_mes">
                          <canvas id="total_mes"></canvas>
                      </div>
                  </div>
                </div>
              <?php endif; ?>
            <!-- FIN CONTENEDDOR TOTAL DE SOLICITUD POR MESES -->

            <!-- CONTENEDDOR TOTAL DE SOLICITUD POR DIA -->
              <?php if($u_nivel==1): ?>
                <div class="col-lg-6 col-md-10 col-sm-12 mt-2">
                  <div class="card rounded">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Solicitudes por Día: 
                            <select id="d_estadistica" class="font-weight-bold" style="background-color: transparent; border:0;">
                                <option value="0">Seleccionar Prefectura</option>
                                <option value="Global">Todas en Conjunto</option>
                                <option value="1">Prefectura Municipal de Antolin del Campo</option>
                                <option value="2">Prefectura Municipal de Arismendi</option>
                                <option value="3">Prefectura Municipal de Díaz</option>
                                <option value="4">Prefectura Municipal de García</option>
                                <option value="5">Prefectura Municipal de Gómez</option>
                                <option value="6">Prefectura Municipal de Maneiro</option>
                                <option value="7">Prefectura Municipal de Marcano</option>
                                <option value="8">Prefectura Municipal de Mariño</option>
                                <option value="9">Prefectura Municipal de Peninsula de Macanao</option>
                                <option value="10">Prefectura Municipal de Tubores</option>
                                <option value="11">Prefectura Municipal de Villalba</option>
                                <option value="22">Prefectura Parroquial de Zabala</option>
                                <option value="19">Prefectura Parroquial de Sucre</option>
                                <option value="18">Prefectura Parroquial de Simón Bolivar</option>
                                <option value="17">Prefectura Parroquial de Matasiete</option>
                                <option value="16">Prefectura Parroquial de Guevara</option>
                                <option value="13">Prefectura Parroquial de Aguirre</option>
                                <option value="12">Prefectura Parroquial de Adrian</option>
                                <option value="20">Prefectura Parroquial de San Francisco</option>
                                <option value="21">Prefectura Parroquial de Vicente Fuentes</option>
                                <option value="15">Prefectura Parroquial de Los Barales</option>
                                <option value="14">Prefectura Parroquial de Francisco Fajardo</option>
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
                        <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Solicitudes por Día: 
                            <input id="d_estadistica" class="font-weight-bold" style="background-color: transparent; border:0;" value="<?php echo $lateral ?>" disabled="true"></input>
                        </h6>
                      </div>
                      <div class="card-body px-1" id="canva_dia">
                          <canvas id="total_dia"></canvas>
                      </div>
                  </div>
                </div>
              <?php endif; ?>
            <!-- FIN CONTENEDDOR TOTAL DE SOLICITUD POR DIA -->
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

<script type="text/javascript" src="validaciones_reporte.js"></script>
<?php include("charts_solicitudes.php"); ?>
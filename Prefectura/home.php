<?php 
  include("administracion.php");

  //CHEQUEA LA PREFECTURA DEL OPERADOR O SINO LO PONE GLOBALIZADO PARA ADMINISTRADOR O USUARIO CUANDO VAYA A PONER ABAJO
  $prefectura = "Prefectura X"; //"Prefecturas";
?>
<style type="text/css">
    @media (min-width: 1024px){
        .topp {
            font-size: 1.1vw;
            line-height: 1em;
        }
    }

    @media (max-width: 1024px){
        .topp {
            font-size: 1.2vw;
            line-height: 1em;
        }
    }

    @media (max-width: 800px){
        .topp {
            font-size: 1.3vw;
            line-height: 1em;
        }
    }

    @media (max-width: 640px){
        .topp {
            font-size: 2vw;
            line-height: 1em;
        }
    }

    @media (max-width: 320px){
        .topp {
            font-size: 4vw;
            line-height: 1em;
        }
    } 
  </style>

        <div class="col-lg-12 col-md-12 m-auto py-3">
          <div class="row text-center">
            <div class="col-12">
              <div class="col-12 mb-4 text-center topp">
                <span>
                  República Bolivariana de Venezuela<br>
                  Gobierno del Estado Bolivariano de Nueva Esparta<br>
                  Dirección del Poder Popular para la Seguridad y Orden Público<br>
                  Prefectura de la Parroquia y/o Municipio
                </span>
              </div>
              <img src="Imagenes/escudo-512x512.png" class="img-fluid" height="250" width="250">
            </div>
            <div class='col-12 text-center'>
              <h1 class="font-weight-light fuente">Bienvenido</h1>
              <p class='font-weight-light text-dark fuente2'><span class='text-primary text-center'><?php echo $prefectura?><br>Estado Nueva Esparta</span>
                <br>Alfredo Díaz Gobernador</p>
            </div>
          </div>
        </div>
      
      <!-- PARTE QUE VIENE LUEGO DEL INCLUDE DE ADMINISTRACION.PHP -->
      </div>
  </div>
    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
</body>
</html>
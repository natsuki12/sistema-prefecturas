<?php
	require_once('tcpdf/config/lang/eng.php');
	require_once('tcpdf/tcpdf.php');
	//require_once('conexion2.php');
	
#datos necesarios

	if (isset($_GET["algo"])){
		$solicitud="F-PF-06";
		$salida="I";
	}else{
		$barcode=$tramite_id;
		$fondo="pdf/fondo.jpg";
		$salida="D";
	}	

	if (get_mpp($municipio_s, $parroquia_s, 4)<12) {
		$cabecera1="<small><b>PREFECTURA MUNICIPIO ".get_mpp($municipio_s, $parroquia_s, 1)."</b></small>";
	}else{
		$cabecera1="<small><b>PREFECTURA PARROQUIA ".get_mpp($municipio_s, $parroquia_s, 2)." - MUNICIPIO ".get_mpp($municipio_s, $parroquia_s, 1)."</b></small>";
	}


/*LO DEMAS PARA TODOS LOS DATOS*/


	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	$pdf->SetTitle($solicitud."-".$cedula_s); //Titlo del pdf
	$pdf->setPrintHeader(false); //No se imprime cabecera
	$pdf->setPrintFooter(false); //No se imprime pie de pagina
	$pdf->SetMargins(20, 20, 30, false); //Se define margenes izquierdo, alto, derecho
	$pdf->SetAutoPageBreak(true, 20); //Se define un salto de pagina con un limite de pie de pagina
	$pdf->addPage();

/*ESTO ES SI QUIERES HACERLO CON BASES DE DATOS*/	///$sql = "SELECT * FROM login";
	//$cosas = $mysqli->query($sql);
	$html = '';
	//$item = 1;
	//foreach($cosas as $row){
		//$usuario = $row['user'];
		//$manufacturero = $row['email'];
		//$imagen = $row['cedula'];
		//$barcode = $row['cedula'];
/*ACA SE CREA EL CODIGO DE BARRAS DEL DOCUMENTO*/

		$barcode = $pdf->serializeTCPDFtagParameters(array($barcode, 'C128', '', '', 72, 25, 0.5, array('position'=>'S', 'border'=>false, 'padding'=>10, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>7, 'stretchtext'=>16), 'N'));

/*ACA ESTA TODO EL TEXTO*/	

	$html= '<div class="contenedor">
						<article>
						
							<p ALIGN="JUSTIFY">Yo, <B>'.strtoupper($nombre1_s)." ".strtoupper($apellido1_s).'</B>, mayor de edad, nacinalidad venezolano(a) de profesión u oficio <B>'.strtoupper($profesion_s).'</B> titular de la cédula de identidad N° V <B>'.$cedula_s.' </B> y domiciliado(a) en <b>'.$direccion1_s.'</b>, municipio <b>'.get_mpp($municipio_s, $parroquia_s, 1).'</b>, del Estado Bolivariano de Nueva Esparta, ante usted ocurro con el fin de obtener, <B>CARTA DE BUENA CONDUCTA</B>, y presento a los ciudadanos <b>'.strtoupper($nombre1_t1).' '.strtoupper($apellido1_t1).'</b>, mayor de edad, de nacionalidad <b>'."VENEZOLANO".'</b> de profesión u oficio <b>'.strtoupper($profesion_t1).'</b>, titular de la cédula de identidad N° V <b>'.$cedula_t1.'</b> y domiciliado(a) en <b>'.strtoupper($direccion1_t1).'</b> municipio<b>'.get_mpp($municipio_t1, $parroquia_t1, 1).'</b> de este Estado, y  <b>'.strtoupper($nombre1_t2).' '.strtoupper($apellido1_t2).'</b> mayor de edad, de nacionalidad <b>'.'VENEZOLANO'.'</b> de profesión u oficio <b>'.strtoupper($profesion_t2).'</b> titular de la cédula de identidad N° V <b>'.$cedula_t2.'</b> y domiciliado(a) en <b>'.strtoupper($direccion1_t2).'</b> municipio <b>'.get_mpp($municipio_t2, $parroquia_t2, 1).'</b> del estado Nueva Esparta
<br><br>Para que den fe de que me conocen de vista, trato y comunicacion, de igual manera les consta que soy una persona de <b>BUENA CONDUCTA Y CORRECTO PRECEDERES</b>. Los testigos antes identificados, declaran y firman en el Despacho de la Prefectura ante el Funcionario autorizado: <b>"CONOCEMOS AL SOLICITANTE DESDE HACE TIEMPO Y NOS CONSTA QUE ES UNA PERSONA HONESTA, DE BUENA CONDUCTA Y CORRECTOS PROCEDERES Y FIRMAMOS, AVALANDO LO AQUI EXPRESADO"</b>.<br><br>

En _______________, a los ____ días del mes de ________ del año _____.</p>
						</article>
					
						
				</div><br><br><br>';

		//$item = $item+1;
/*ACA CREO EN DONDE PONGO EL CODIGO DE BARRAS*/

	$codigo= '<div class="contenedor">
					<article>
						
						<tcpdf method="write1DBarcode" params="'.$barcode.'" />
					<article>
					</div>';
/*ESTO ES EL TITULO QUE ESTA EN EL DOCUMENTO QUE DICE QUE TIPO DE SOLICITUD ES*/

					   $cabecera2='<b>CARTA DE BUENA CONDUCTA'.          ' <small>F-PF-:06</small></b>';

/*COLOCO EL FONDO*/    

$pdf->Image($fondo , 0 ,0, 240 , 300,'JPG');

/*POSICION Y IMPRIMO EL TITULO*/

	$pdf->SetXY(42, 24);
	$pdf->writeHTML($cabecera1, true, 0, true, 0);

	$pdf->SetXY(42, 27);
	$pdf->writeHTML($cabecera2, true, 0, true, 0);
	
/*TIPO DE LETRA POSICION Y IMPRIMO EL TEXTO*/	
	
	$pdf->SetFont('Helvetica', '', 12);
	$pdf->SetXY(2, 57);
	$pdf->writeHTML($html, true, 0, true, 0);
	
/*POSICION Y IMPRIMO EL CODIGO DE BARRAS*/	
	
    $pdf->SetXY(0, 245);
	$pdf->writeHTML($codigo, true, 0, true, 0);
	$pdf->lastPage();
	
	/*ACA ESTA EL NOMBRE QUE TENDRA EL PDF*/
	ob_end_clean();
	$pdf->output($solicitud.'-'.$cedula_s.'.pdf', $salida);
?>
<?php
	require_once('tcpdf/config/lang/eng.php');
	require_once('tcpdf/tcpdf.php');
//	require_once('conexion2.php');
	
/*ESTO TIENE QUE SER LA CEDULA HACIENDO EL METODO $CEDULA=_POST["CEDULA"];*/	

$barcode='CDBC26344866';

/*LO DEMAS PARA TODOS LOS DATOS*/


	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	$pdf->SetTitle('PDF Autogenerado en PHP'); //Titlo del pdf
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
						
							<p ALIGN="JUSTIFY">En horas de despacho del dia de hoy<b>'./*dia de impresion*/'</b>, del mes de <b>'./*mes de impresion*/'</b> del año <b>'./*año de impresion*/'</b>, compareció ante esta Prefectura el(la) ciudadano(a)<b>'./*nombre de la persona*/'</b> venezolano(a), mayor de edad, titular de la cédula de identidad <b> N° V './*cedula de la persona*/'</b>, residenciado(a) en <b>'./*direccion*/'</b> del Estado Bolivariano de Nueva Esparta desde hace <b>'./*tiempo que lleva en esa direccion*/'</b> años,  quien manifiesta la necesidad de mudarse a:<b>'./*direccion de mudanza*/'</b> estado <b>'./*estado de la direccion*/'</b> donde fijara su residencia, llevando consigo un vehículo de propiedad de puerto libre, <b> MARCA'./*marca del vehiculo*/' MODELO './*MODELO DEL VEHICULO*/' AÑO './*AÑO DEL VEHICULO*/' COLOR './*COLOR DEL VEHICULO*/' SERIAL DE CARROCERIA './*NUMERO DE SERIAL*/' PLACA './*NUMERO DE PLACA*/'</B> el vehículo aqui descrito queda sujeto a las inspeciones de las Autoridades Aduanales.<br><br> Se expide la presente a solicitud de parte interesada para cumplir con lo dispuesto en el Articulo 24, numeral 1, de la Ley de Puerto Libre del Estado Nueva Esparta, fecha 03/08/2000, como consecuencia de Mudanza Definitiva (Régimen Equipaje), el cual establece lo siguiente:</article>
					
						
				</div><br><br><br>';

		//$item = $item+1;
/*ACA CREO EN DONDE PONGO EL CODIGO DE BARRAS*/

	$codigo= '<div class="contenedor">
					<article>
						
						<tcpdf method="write1DBarcode" params="'.$barcode.'" />
					<article>
					</div>';
/*ESTO ES EL TITULO QUE ESTA EN EL DOCUMENTO QUE DICE QUE TIPO DE SOLICITUD ES*/

					   $cabecera='<b>CONSTANCIA DE MUDANZA'.          '  F-PF-:01';
//					   $cabecera2='<b>Ciudadano(a):'./*persona encargada*/'<br>Director Regional SAIME.<br>Su Despacho</b>';

/*COLOCO EL FONDO*/    

$pdf->Image('fondoe.jpg' , 0 ,0, 240 , 300,'JPG');

/*POSICION Y IMPRIMO EL TITULO*/
	$pdf->SetFont('Helvetica', '', 11);
	$pdf->SetXY(42, 25);
	$pdf->writeHTML($cabecera, true, 0, true, 0);
	$pdf->SetFont('Helvetica', '', 10);
//	$pdf->SetXY(42, 30);
//	$pdf->SetMargins(42, 20, 40, false);
//	$pdf->writeHTML($cabecera2, true, 0, true, 0);
	
/*TIPO DE LETRA POSICION Y IMPRIMO EL TEXTO*/	
	$pdf->SetMargins(20, 20, 30, false);
	$pdf->SetFont('Helvetica', '', 12);
	$pdf->SetXY(2, 45);
	$pdf->writeHTML($html, true, 0, true, 0);
	
/*POSICION Y IMPRIMO EL CODIGO DE BARRAS*/	
	
    $pdf->SetXY(0, 245);
	$pdf->writeHTML($codigo, true, 0, true, 0);
	$pdf->lastPage();
	
	/*ACA ESTA EL NOMBRE QUE TENDRA EL PDF*/
	
	$pdf->output('CONSTANCIA DE MUDANZA.pdf', 'D');
?>
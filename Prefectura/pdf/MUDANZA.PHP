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
						
							<p ALIGN="JUSTIFY"><b>EL(LA) SUSCRITO(A) ABG.'./*nombre del prefecto*/'</b> Prefecto del Municipio'./*municipio*/' del Estado Bolivariano de Nueva Esparta, hace constar: que pot ante este Despacho se presentó el(la) Cuidadano(a): <b>'./*nombre de la persona*/',</b> de nacionalidad <b>'./*nacionalidad de la persona*/'</b>, Venezolano(a), mayor de edad, titular de la cédula de indentidad <b>N° './*cedula de la persona*/'</b> residenciado(a) en: <b>'./*direcion de la persona*/'</b> Municipio <b>'./*municipio de la persona*/'</b>, Estado Bolivariano de Nueva Esparta y Manifestó: Por motivos de mudanza de la Isla de Margarita a la siguiente dirección <b>'./*direccion de la mudanza de la persona*/'</b>, Esstado <b>'./*estado de la direccion de la mudanza*/'</b>, tiene que trasladar sus enseres personales, en un vehículo con las siguientes características <b>MARCA: './*MARCA DEL VEHÍCULO*/', MODELO:'./*MODELO DEL VEHICULO*/', PLACA: './*PLACA DEL VEHICULO*/', COLOR: './*COLORE DELVEHICULO*/', AÑO: './*AÑO DEL VEHICULO*/', SERIAL: './*SERIAL DEL VEHICULO*/'</b>, conducido por el ciudadano <b>'./*nombre del conductor*/' C.I.N° './*cedula del condictor*/'.</b><br><br><i>"ante usted ocurro con el fin de obtener <B>CONSTANCIA DE MUDANZA</B> y presento a los ciudadanos <b>'./*nombre del testigo 1*/'</b>, de nacionalidad <b>'./*nacionalidad del testigo 1*/'</b>, mayor de edad, de profesión u oficio: <b>'./*profesion del testigo 1*/'</b>, cédula de identidad <b>N° './*cedula del testigo 1*/'</b> y domiciliado en: <b> './*direccion del testigo 1*/'</b>, municipio <b>'./*municipio del testigo 1*/'</b> y <b>'./*nombre del testigo 2*/'</b>, de nacionalidad <b>'./*nacionalidad del testigo 2*/'</b>, mayor de edad, de profesión u oficio: <b>'./*profesion del testigo 2*/'</b>, cédula de identidad <b>N° './*cedula del testigo 2*/'</b> y domiciliado en: <b> './*direccion del testigo 2*/'</b>, municipio <b>'./*municipio del testigo 2*/'</b> Estado Bolivariano de Nueva Esparta"</i><br><br>Contancia, que se expide a solicitud de parte interesada en la Ciudad de <b>'./*cuidad de emision*/'</b> a los <b>'./*dia de emision*/'</b> dias del mes de<b>'./*mes de emision*/'</b> del año <b>'./*año de emision*/'</b>. Años  207° de la independencia y 158° de la Federacion. </article>
					
						
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

$pdf->Image('FONDOM.jpg' , 0 ,0, 240 , 300,'JPG');

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
	
	$pdf->output('CONSTANCIA DE MUDANZA.pdf', 'I');
?>
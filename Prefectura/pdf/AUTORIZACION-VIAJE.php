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
						
							<p ALIGN="JUSTIFY">El(la) suscrito(a), Abg. <b>'./*nombre del prefecto*/'</b>, Prefecto(a) del Municipio <b>'./*nombre del municipio del prefecto*/'</b> del estado bolivariano de Nueva Esparta, en uso de las atribuciones que me confiere el <b>Articulo N° 391</b> de la <b>LEY ORGÁNICA PARA LA PROTECTION DE NIÑO, NIÑAS Y ADOLECENTES,</B> doy <b>FE</b> que ante este Despacho compareció el(la) ciudadano(a)<b>'./*nombre del padre o madre*/'</b> de <b>'./*npi*/'</b> Estado Bolivariano de Nueva Esparta, quién <b>AUTORIZA</b> a su Hijo(a)<b>'./*nombre del hijo(a)*/'</b> de <b>'./*edad del hijo(a)*/'</b> años de edad, venezolano(a), titular de la cédula de identidad <b>N° V'./*cedula del hijo*/'</b> para viajar a la siguiente dirección <b>'./*direccion destino*/'</b> en compañía del(de la) ciudadano(a)<b>'./*nombre del responsable*/'</b>, titular de la cédula de identidad <b>N° V'./*cedula del responsable*/'</b>.<br><br> Vista la presente solicitud y verificados, como han sido los datos que preceden, <b> SE CONCEDE LA AUTORIZACIÓN CORRESPONDIENTE PARA LOS FINES ANTES EXPUESTOS</B>, en <b>'./*me imagino que es el nombre de la carta*/'</b> a los <b>'./*dias de impresion*/'</b> dias del mes<b>'./*mes de impresion*/'</b> del año <b>'./*año de impresion*/'.</b><br><br><b>VALIDO POR './*NUMERO DE DIAS VALIDOS*/' DIAS.					</article>
					
						
				</div><br><br><br>';

		//$item = $item+1;
/*ACA CREO EN DONDE PONGO EL CODIGO DE BARRAS*/

	$codigo= '<div class="contenedor">
					<article>
						
						<tcpdf method="write1DBarcode" params="'.$barcode.'" />
					<article>
					</div>';
/*ESTO ES EL TITULO QUE ESTA EN EL DOCUMENTO QUE DICE QUE TIPO DE SOLICITUD ES*/

					   $cabecera='<b>AUTORIZACION PARA VIAJAR DENTRO DEL PAIS'.          '  F-PF-:05';
//					   $cabecera2='<b>Ciudadano(a):'./*persona encargada*/'<br>Director Regional SAIME.<br>Su Despacho</b>';

/*COLOCO EL FONDO*/    

$pdf->Image('FONDOED.jpg' , 0 ,0, 240 , 300,'JPG');

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
	$pdf->SetXY(2, 55);
	$pdf->writeHTML($html, true, 0, true, 0);
	
/*POSICION Y IMPRIMO EL CODIGO DE BARRAS*/	
	
    $pdf->SetXY(0, 245);
	$pdf->writeHTML($codigo, true, 0, true, 0);
	$pdf->lastPage();
	
	/*ACA ESTA EL NOMBRE QUE TENDRA EL PDF*/
	
	$pdf->output('VIAJAR DENTRO DEL PAIS.pdf', 'D');
?>
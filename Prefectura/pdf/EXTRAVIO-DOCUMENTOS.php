<?php
	require_once('tcpdf/config/lang/eng.php');
	require_once('tcpdf/tcpdf.php');
	require_once('conexion2.php');
	
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
						
							<p ALIGN="JUSTIFY">Tengo el agrado de dirigirme a Usted, en la oportunidad de solicitar su colaboración, a fin de facilitar los trámites legales para la tramitacion de la Cédula de identidad de Ciudadano(a)<b>'./*nombre del ciudadano*/'</b> quien dice ser titular de la cédula de identidad N° <b>'./*cedula del solicitante*/'</b> residenciado en la siguiente direccion <b>'./*direccion del solicitante*/'</b>, municipio <b>'./*municipio del solicitante*/'</b> del Estado Nueva Esparta. <br><br>Visto que el(la) Ciudadano(a) antes mencionado(a) extravio su documentacion personal, (entre otros) previa notificacion a las autoridades competentes (C.I.C.P.C).<br><br>Agradeciendo toda la colaboracion que pueda prestar, se suscribe.<br><br><br><b>VÁLIDO POR SETENTA Y DOS (72) HORAS.<BR><BR>ELABORADA A LOS'./*DIA DE ELABORACION*/' DIAS DEL MES DE './*MES DE ELABORACION*/' DEL AÑO './*AÑO DE ELABORACION*/'.

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

					   $cabecera='<b>CONSTANCIA DE EXTRAVIO DE DOCUMENTOS'.          '  F-PF-:08';
					   $cabecera2='<b>Ciudadano(a):'./*persona encargada*/'<br>Director Regional SAIME.<br>Su Despacho</b>';

/*COLOCO EL FONDO*/    

$pdf->Image('FONDOED.jpg' , 0 ,0, 240 , 300,'JPG');

/*POSICION Y IMPRIMO EL TITULO*/
	$pdf->SetFont('Helvetica', '', 11);
	$pdf->SetXY(42, 25);
	$pdf->writeHTML($cabecera, true, 0, true, 0);
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->SetXY(42, 30);
	$pdf->SetMargins(42, 20, 40, false);
	$pdf->writeHTML($cabecera2, true, 0, true, 0);
	
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
	
	$pdf->output('EXTRAVIO DE DOCUMENTOS.pdf', 'F');
?>
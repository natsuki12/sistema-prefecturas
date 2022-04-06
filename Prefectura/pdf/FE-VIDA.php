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
						
							<p ALIGN="JUSTIFY">El(la) suscrito(a), Abg.<b>'./*nombre del prefecto*/'</b>, Prefecto(a) del municipio <b>'./*nombre del municipio*/'</b> del Estado Bolivarioano de Nueva Esparta, hace constar que el(la) Ciudadano(a) <b>'./*nombre del solicitante*/'</b>, de nacinalidad <b>'./*nacionalidad del solicitante */'</b> Edad <b>'./*edad del solicitante*/'</b> Años, fecha de nacimiento <b>'./*fecha de nacimiento del solicitante*/'</b>, titular e la cédula de identidad <b>N° V './*numero de cedula*/'</b>, Estado civil <B>'./*estado civil del solicitante*/'</b>, acude ante este despacho con el fin de obtener <b>CONSTANCIA DE FE DE VIDA</B>, presento a los ciudadanos <b>'./*nombre del testigo1*/'</b>mayor de edad, de nacionalidad <b>'./*NACIONALIDAD DEL PRIMER TESTIGO*/'</b>de profesion u oficio <b>'./*PROFESION DEL PRIMER TESTIGO*/'</b> titular de la cedula de identidad <b>n° v'./*CEDULA DEL PRIMER TESTIGO*/'</b> municipio<b>'./*MUNICIPIO DEL PRIMER TESTIGO*/'</b> de este estado, y  <b>'./*NOMBRE DEL SEGUNDO TESTIGO*/'</b> mayor de edad, de nacionalidad <b>'./*NACIONALIDAD DEL SEGUNDO TESTIGO*/'</b> de profesion u oficio <b>'./*PROFESION DEL SEGUNDO TESTIGO*/'</b>titular de la cedula de identidad <b>n° v'./*CEDULA DEL SEGUNDO TESTIGO*/'</b> municipio <b>'./*MUNICIPIO DEL SEGUNDO TESTIGO*/'</b> del Estado Bolivarioano de Nueva Esparta <br><br> Para que den fe de que me encuentri <B>VIVO Y RESIDENCIADO</B> en la siguiente direccion <b>'./*direccion del solicitante*/'</b> municipio <b>'./*municipio del solicitante*/'</b>, del Estado Bolivariano de Nueva Esparta<br><br> Los testigos antes identificados, declaran y firman ante este Despacho ante al Funcionario autorizado: <b>CONOCEMOS AL SOLICITANTE DESDE HACE TIEMPO Y NOS CONSTA QUE VIVE Y SE ENCUENTRA RESIDENCIADO(A) EN: './*DIRECCION EL SOLICITANTE*/'MUNICIPIO './*MUNICIPIO DEL SOLICITANTE*/', DEL ESTADO BOLIVARIANO DE NUEVA ESPARTA Y FIRMAMOS AVALANDO LO AQUI EXPRESADO.</b> <BR><BR>Se expide la presente a solicitud de parte interesada, en <b>'./*nombre de la prefectura*/'</b> a los dias del mes del año<b>'.'.</b></article>
					
						
				</div><br><br><br>';

		//$item = $item+1;
/*ACA CREO EN DONDE PONGO EL CODIGO DE BARRAS*/

	$codigo= '<div class="contenedor">
					<article>
						
						<tcpdf method="write1DBarcode" params="'.$barcode.'" />
					<article>
					</div>';
/*ESTO ES EL TITULO QUE ESTA EN EL DOCUMENTO QUE DICE QUE TIPO DE SOLICITUD ES*/

					   $cabecera='<b>CONSTANCIA DE FE DE VIDA'.          '  F-PF-:01';
//					   $cabecera2='<b>Ciudadano(a):'./*persona encargada*/'<br>Director Regional SAIME.<br>Su Despacho</b>';

/*COLOCO EL FONDO*/    

$pdf->Image('fondo.jpg' , 0 ,0, 240 , 300,'JPG');

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
	
	$pdf->output('CONSTANCIA FE DE VIDA.pdf', 'D');
?>
<?php
	require_once('tcpdf/config/lang/eng.php');
	require_once('tcpdf/tcpdf.php');

  $logoc='../pdf/images/logoc.png';
  $logogob='../pdf/images/logogob.png';
  $gobernacion2='../pdf/images/Gobernacion2.png';
 

  $barcode=0000;/*ACA PONES EL VALOR DEL NUMERO DE REPORTE*/
	
	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	$pdf->SetTitle('DF'); //Titlo del pdf
	$pdf->setPrintHeader(false); //No se imprime cabecera
	$pdf->setPrintFooter(false); //No se imprime pie de pagina
	$pdf->SetMargins(20, 20, 20, false); //Se define margenes izquierdo, alto, derecho
	$pdf->SetAutoPageBreak(true, 20); //Se define un salto de pagina con un limite de pie de pagina
	$pdf->addPage();
	
	


	$html = '';
	$barcode = $pdf->serializeTCPDFtagParameters(array($barcode, 'C128', '', '', 72, 25, 0.5, array('position'=>'S', 'border'=>false, 'padding'=>10, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>7, 'stretchtext'=>16), 'N'));
	$item = 1;

		$html .= '<table class="egt" border="0.1" cellpadding="5">

  <thead>

    <tr>

      <th colspan="4" align="center"><b>DATOS PERSONALES</b></th>


    </tr>


  </thead>

  <tbody>

   

    <tr>



      <td align="center"><b>NOMBRE 1</b></td>

      <td align="center">'./**/'</td>

      <td align="center"><b>NOMBRE 2</b> </td>

      <td align="center">'./**/'</td>

    </tr>

    <tr>



      <td align="center"><b>APELLIDO 1</b></td>

      <td align="center">'./**/'</td>

      <td align="center"><b>APELLIDO 2</b></td>

      <td align="center">'./**/'</td>

    </tr>

    <tr>



      <td align="center"><b>CEDULA</b></td>

      <td align="center">'./**/'</td>

      <td align="center"><b>PROFESION U OFICIO</b> </td>

      <td align="center">'./**/'</td>

    </tr>

    <tr>



      <td align="center"><b>ESTADO CIVIL</b></td>

      <td align="center">'./**/'</td>

      <td align="center"><b>FECHA DE NACIMIENTO</b></td>

      <td align="center">'./**/'</td>

    </tr>
	<tr>



      <td align="center"><b>CEDULA DEL PADRE</b></td>
 
      <td align="center">'./**/'</td>

      <td align="center"><b>CEDULA DE LA MADRE</b></td>

      <td align="center">'./**/'</td>

    </tr><tr>



     <td align="center"><b>MUNICIPIO</b></td>

      <td align="center">'./**/'</td>

      <td align="center"><b>PARROQUIA </b></td>

      <td align="center">'./**/'</td>

    </tr><tr>



      <td align="center"><b>DIRECCION 1</b></td>

      <td align="center">'./**/'</td>

      <td align="center"><b>DIRECCION 2</b></td>

      <td align="center">'./**/'</td>

    </tr>

  </tbody>

  <tfoot>

    <tr>

    <th colspan="4" ALIGN="CENTER"><b>DATOS DE CONTACTO</b></th>


    </tr>
	

	<tr>



      <td align="center"><b>TELEFONO 1</b></td>

      <td align="center">'./**/'</td>

      <td align="center"><b>TELEFONO 2 </b></td>

      <td align="center">'./**/'</td>

    </tr>
	<tr>



      <td align="center"><b>CORREO</b></td>

      <td align="center">'./**/'</td>

      <td align="center"><b>FACEBOOK </b></td>

      <td align="center">'./**/'</td>

    </tr>
	<tr>



      <td align="center"><b>INSTAGRAM</b></td>

      <td align="center">'./**/'</td>

      <td align="center"><b>TWITTER</b></td>

      <td align="center">'./**/'</td>

    </tr>

  </tfoot>

</table><br><br>';

	

	
		$cabecera='<p align="justify"><b>Republica Bolivariana de Venezuela <br>Gobernación de Estado Nueva Esparta<br>Direccion del poder popular para la Seguridad y el Orden Público<BR>SISTEMA DE PREFECTURAS<b>';

		$titulo='<P ALIGN="CENTER"><b>PLANILLA DE REGISTRO</b></P>';
	
		 /*ACA CREO EN DONDE PONGO EL CODIGO DE BARRAS*/

		 $codigo= '<div class="contenedor">
					<article>
							
						<tcpdf method="write1DBarcode" params="'.$barcode.'" />
						<article>
						</div>';
	/*COLOCACION DE LOS LOGOS*/	
  $pdf->Image('escudo.png' , 15 ,10, 30, 30,'PNG');
  $pdf->Image('seguridad.png' , 165 ,10, 30, 30,'PNG');
//  $pdf->Image('images/Gobernacion2.png' , 13 ,225, 180 , 20,'PNG'); /*laterales,alto,*/
  $pdf->SetMargins(47, -100, 20, false); //Se define margenes izquierdo, alto, derecho
  $pdf->SetXY(30, 10);
  $pdf->SetFont('Helvetica', '', '10');
  $pdf->writeHTML($cabecera, true, 0, true, 0);
	/*TIPO DE LETRA POSICION Y IMPRIMO EL CUADRO*/	
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->SetXY(15, 68);
	$pdf->writeHTML($html, true, 0, true, 0);
	$pdf->SetXY(0, 245);

	/*imprimo y posicion del titulo*/
	 $pdf->SetFont('HELVETICA','','15');
  $pdf->SetXY(75,55);
  $pdf->writeHTML($titulo,true,0,true,0);
	/*POSICION Y IMPRIMO EL CODIGO DE BARRAS*/	
	
  $pdf->SetXY(0, 245);
	$pdf->writeHTML($codigo, true, 0, true, 0);
	/*FIN DEL PDF*/
	$pdf->lastPage();
  ob_end_clean();
  $pdf->output('Reporte.pdf', 'I');
?>

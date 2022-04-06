<?php
  require_once('tcpdf/config/lang/eng.php');
  require_once('tcpdf/tcpdf.php');

    $barcode='CDBC26344866';/*ACA PONES EL VALOR DEL NUMERO DE REPORTE*/
  
  $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
  $pdf->SetTitle('PDF Autogenerado en PHP'); //Titlo del pdf
  $pdf->setPrintHeader(false); //No se imprime cabecera
  $pdf->setPrintFooter(false); //No se imprime pie de pagina
  $pdf->SetMargins(20, 20, 20, false); //Se define margenes izquierdo, alto, derecho
  $pdf->SetAutoPageBreak(true, 20); //Se define un salto de pagina con un limite de pie de pagina
  $pdf->addPage();
  
  


  $html = '';
  $barcode = $pdf->serializeTCPDFtagParameters(array($barcode, 'C128', '', '', 72, 25, 0.5, array('position'=>'S', 'border'=>false, 'padding'=>10, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>7, 'stretchtext'=>16), 'N'));
  $item = 1;

    $html .= '<table class="egt" border="0.1" cellpadding="2">

  <thead>

    <tr>

      <th colspan="1" align="center" width="48px"><b>NOMBRE</b></th>

      <th colspan="1" align="center" width="48px"><b>APELLIDO</b></th>
      <th colspan="1" align="center" width="48px"><b>CEDULA</b></th>
      <th colspan="1" align="center" width="48px"><b>PROFESION</b></th>
      <th colspan="1" align="center" width="48px"><b>CORREO</b></th>
      <th colspan="1" align="center" width="48px"><b>ESTADO CIVIL</b></th>

      <th colspan="1" align="center" width="68px"><b>FECHA DE NACIMIENTO</b></th>

    
     

    </tr>


  </thead>

  <tbody>

   

    

    <tr>



      <td align="center" width="48px" HEIGHT="20">'./*ACA VA NOMBRE*/'</td>

      <td align="center" width="48px" HEIGHT="20">'./*ACA VA EL APELLIDO*/'</td>

     <td align="center" width="48px" HEIGHT="20">'./*ACA VA EL CEDULA*/'</td>

      <td align="center" width="48px" HEIGHT="20">'./*ACA VA LA PROFESION*/'</td>

      <td align="center" width="48px" HEIGHT="20">'./*ACA VA LA CORREO*/'</td>

      <td align="center"width="48px" HEIGHT="20">'./*ACA VA EL ESTADO CIVIL*/'</td>

    
      <td align="center" width="68px" HEIGHT="20">'./*ACA VA LA FECHA DE NACIMIENTO*/'</td>


   
    </tr>

    <TR>
    <td align="center" width="475px" HEIGHT="20"><B>DATOS DE CONTACTO</B></td>
    </TR>

    <tr>



      <td align="center" width="58px" HEIGHT="20"><B>TELEFONO 1</B></td>

      <td align="center" width="58px" HEIGHT="20"><B>TELEFONO 2</B></td>

     <td align="center" width="58px" HEIGHT="20"><B>INSTAGRAM</B></td>

      <td align="center" width="58px" HEIGHT="20"><B>FACEBOOK</B></td>

      <td align="center" width="58px" HEIGHT="20"><B>TWITTER</B></td>

      

   
    </tr>

    <tr>





      <td align="center" width="58px" HEIGHT="20">'./*ACA VA TELEFONO 1*/'</td>

      <td align="center" width="58px" HEIGHT="20">'./*ACA VA TELEFONO 2*/'</td>

      <td align="center"width="58px" HEIGHT="20">'./*ACA VA INSTAGRAM*/'</td>

      <td align="center" width="58px" HEIGHT="20">'./*ACA VA EL FACEBOOK*/'</td>

      <td align="center" width="58px" HEIGHT="20">'./*ACA VA EL TWITTER*/'</td>

      

   
    </tr>

     <TR>
    <td align="center" width="475px" HEIGHT="20"><B>DIRECCION</B></td>
    </TR>

<tr>



  


      <td align="center" width="48px" HEIGHT="20"><B>MUNICIPIO</B></td>

      <td align="center"width="48px" HEIGHT="20"><B>PORROQUIA</B></td>

      <td align="center" width="48px" HEIGHT="20"><B>DIRECCION 1</B></td>


      <td align="center" width="48px" HEIGHT="20"><B>DIRECCION 2</B></td>
      

   
    </tr>

    <tr>





      <td align="center" width="48px" HEIGHT="20">'./*ACA VA MUNICIPIO*/'</td>

      <td align="center"width="48px" HEIGHT="20">'./*ACA VA  PARROQUIA*/'</td>

      <td align="center" width="48px" HEIGHT="20">'./*ACA VA DIRECCION 1*/'</td>

      <td align="center" width="48px" HEIGHT="20">'./*ACA VA DIRECCION 2*/'</td>
    
    </tr>
     

  </tbody>

  <tfoot>

  

  </tfoot>

</table><br><br>';

  

  
    $cabecera='<p align="justify"><b>Republica Bolivariana de Venezuela <br>Gobernación de Estado Nueva Esparta<br>Direccion del poder popular para la Seguridad y el Orden Público<BR>SISTEMA DE PREFECTURAS<b>';

    $titulo='<P ALIGN="CENTER"><b>ESTADISTICAS DEL SISTEMA DEL '.date("d-m-Y",time())./*ACA PONES EL AÑO POR VALIABRE Y YA*/'</b></P>';
  
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
  $pdf->SetMargins(20, -100, 20, false); //Se define margenes izquierdo, alto, derecho
  $pdf->SetXY(20, 15);
  $pdf->SetFont('Helvetica','','11');
  $pdf->writeHTML($cabecera, true, 0, true, 0);
  /*TIPO DE LETRA POSICION Y IMPRIMO EL CUADRO*/  
  $pdf->SetFont('Helvetica', '', '7');
  $pdf->SetXY(25, 88);
  $pdf->writeHTML($html, true, 0, true, 0);
  $pdf->SetXY(0, 245);

  /*imprimo y posicion del titulo*/
  $pdf->SetFont('HELVETICA','','15');
  $pdf->SetXY(15,65);
  $pdf->writeHTML($titulo,true,0,true,0);
  /*POSICION Y IMPRIMO EL CODIGO DE BARRAS*/  
  
    $pdf->SetXY(0, 245);
  $pdf->writeHTML($codigo, true, 0, true, 0);
  /*FIN DEL PDF*/
  $pdf->lastPage();
  $pdf->output('Reporte.pdf', 'I');

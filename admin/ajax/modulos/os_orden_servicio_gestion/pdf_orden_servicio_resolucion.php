<?php

/**
 * @modificado_por Esteban Martinez
 * @modificado 21/10/2016
 * @modificado 22/10/2016
 * @modificado 14/11/2016
 */
include_once "_autoload.php";

define("FPDF_FONTPATH", Gral::getPathAbs()."comps/fpdf184/font/");
include Gral::getPathAbs()."comps/fpdf184/pdf.php";

$id = Gral::getVars(2, "os_id", 0);
$resolucion_id = Gral::getVars(2, "resolucion_id", 0);

$os_orden_servicio = OsOrdenServicio::getOxId($id);

$os_tipo_orden       = $os_orden_servicio->getOsTipo();
$os_tipo_estado      = $os_orden_servicio->getOsTipoEstado();
$per_persona         = $os_orden_servicio->getPerPersona();

$gral_empresa        = $per_persona->getGralEmpresa();

$os_resolucion = OsResolucion::getOxId($resolucion_id);
$os_tipo_resolucion = $os_resolucion->getOsTipoResolucion();
$os_resolucion_suspension = $os_resolucion->getOsResolucionSuspension();

// se obtiene estado correspondiente a descargo realizado, si lo tuviese
$os_estado_descargo_realizado = $os_orden_servicio->getOsEstadoXCodigoDeOsTipoEstado(OsTipoEstado::TIPO_DESCARGO_REALIZADO);

$user = UsUsuario::autenticado();

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 12);
$pdf->setUsuario($user);

$pdf->Image($gral_empresa->getPathImagenCabeceraPdfOrdenServicio(), 20, 7, 170);


//La fecha como array
$arr_fecha_os = Date::getArrFecha($os_resolucion->getFecha());

//Cada parte de la fecha
$fecha_dia_os  = $arr_fecha_os["dia"];
$fecha_mes_os  = $arr_fecha_os["mes"];
$fecha_anio_os = $arr_fecha_os["anio"];

//El mes expresado en letras
$fecha_mes_letras_os = Date::getMesLetras($fecha_mes_os);


$os_tipo_resolucion_tipo = strtoupper($os_tipo_resolucion->getDescripcion());
$os_tipo_resolucion_tipo_ext = $os_tipo_resolucion_tipo;
if($os_tipo_resolucion->getCodigo() == OsTipoResolucion::TIPO_SUSPENSION){
    if($os_resolucion_suspension && $os_resolucion_suspension->getAfectaHaberes()){
        $os_tipo_resolucion_tipo_ext.= ' SIN GOCE DE HABERES';
    }
}

// Pares
$x = 20;
$y = 45;

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Arial", "", 11);
$pdf->SetFillColor(255,255,255);
$pdf->setXY($x, $y);
$pdf->Cell(170, 6, utf8_decode($lugar), 0, 1, 'L', 1);

$y = $y + 4;

$pdf->setParSimple(utf8_decode("Señor: "), $per_persona->getDescripcion(), $x, $y = $y + 6);
$pdf->setParSimple("Cod: ", $os_orden_servicio->getCodigo(), $x = $x + 95, $y);

$x = 20;
$pdf->setParSimple("Legajo: ", $per_persona->getLegajo(), $x, $y = $y + 6);
$pdf->setParMultiCell("Tipo OS: ", $os_orden_servicio->getOsTipo()->getDescripcion(), $x = $x + 95, $y, $w = 60, $h = 5);

$x = 20;
$pdf->setParSimple("Empresa", $gral_empresa->getDescripcion(), $x, $y = $y + 6);


$x = 20;
$pdf->setParSimple("Fecha Hecho: ", Date::getFechaVisual($os_orden_servicio->getFechaHecho()), $x = $x + 95, $y);

$x = 20;
//$pdf->setParSimple("Base", $co_centro_operativo->getDescripcion(), $x, $y = $y + 6);
$pdf->setParSimple("Base", '', $x, $y = $y + 6);
$pdf->setParSimple("Estado: ", $os_orden_servicio->getOsTipoEstado()->getDescripcion(), $x = $x + 95, $y);

if( $os_orden_servicio->getFueNotificada() ){
    $pdf->setParSimple("Fecha Notif: ", Date::getFechaVisual($os_orden_servicio->getFechaNotificacion() ), $x = $x + 95, $y = $y + 6);
}


$x = $pdf->GetX() + 75;
$y = $pdf->GetY() + 10;


$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(255,255,255);
$pdf->setXY($x, $y);
$pdf->Cell(170, 6, $os_tipo_resolucion_tipo, 0, 1, 'L', 1);

$pdf->SetFont("Arial", "", 11);

/*
$texto_apercibimiento = utf8_decode(
        'Se le informa por este medio que la empresa ha resuelto aplicarle un '.strtoupper($os_tipo_resolucion->getDescripcion()).
        ' con relacion al hecho: "'.utf8_encode($os_orden_servicio->getNotificacion()).'"' 
        );
*/

$texto_apercibimiento = (
        'Se le informa por este medio que la empresa ha resuelto aplicarle un '.$os_tipo_resolucion_tipo_ext.
        ' con relación al hecho descripto en la Orden de Servicio '.$os_orden_servicio->getCodigo().'.'
        );

if($os_resolucion){
    $texto_apercibimiento.= PHP_EOL;
    $texto_apercibimiento.= ($os_resolucion->getNotaPublica());    
}

$y = $y + 8;
$pdf->setXY(20, $y);
$pdf->MultiCell(170, 6, utf8_decode($texto_apercibimiento), 0, 1, "L", 1);

$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->setXY(20, $y);
$pdf->Cell(150, 6, utf8_decode("Queda usted debidamente notificado."), 0, 1, "L", 1);


// -----------------------------------------------------------------
// SI ES SUSPENSION
if($os_resolucion_suspension){
    $x = $pdf->GetX() + 20;
    $y = $pdf->GetY();
    
    $pdf->setParSimple("Suspension: ", $os_resolucion_suspension->getDiasSuspension().' días', $x, $y = $y + 6);
    $pdf->setParSimple("Inicio: ", Gral::getFechaToWEB($os_resolucion_suspension->getFechaInicio()), $x, $y = $y + 6);
    $pdf->setParSimple("Fin: ", Gral::getFechaToWEB($os_resolucion_suspension->getFechaFin()), $x, $y = $y + 6);
    $pdf->setParSimple("Reintegro: ", Gral::getFechaToWEB($os_resolucion_suspension->getFechaReintegro()), $x, $y = $y + 6);
}
// -----------------------------------------------------------------


// solo se muestra si tiene descargo realizado
if($os_estado_descargo_realizado){
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetFont("Arial", "", 8);

    $y = $y + 5;
    $pdf->setXY(20, $y);
    $pdf->MultiCell(170, 4, utf8_decode(
            'El descargo realizado NO le exime de la responsabilidad en los hechos apuntados, '
            . 'por ello se le advierte que de REINCIDIR en una falta similar se adoptaran SEVERAS MEDIDAS DISCIPLINARIAS.'
            ), 0, 1, "L", 1);


    $pdf->SetFont("Arial", "", 11);
}


$y = $y + 15;
$pdf->setXY(55, $y);
$pdf->Cell(150, 6, utf8_decode("_____________________________________________"), 0, 1, "L", 1);



$pdf->Ln(30);
//$pdf->setBloqueFirma($array = array($per_persona->getDescripcion(), "RICARDO J. BARCHUK"));
$array = array(strtoupper($per_persona->getDescripcion() ), "DEPARTAMENTO RRHH");

$x = -30;
$y = $pdf->GetY();

$i = 1;
$titulo = "";
foreach($array as $array_uno)
{
    
    $string_puntos = '......................................................';
    $x = $x + 80;
    
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',9);
    $pdf->SetFillColor(255,255,255);
    $pdf->setXY($x, $y);
    $pdf->Cell(1, 3, $string_puntos, 0, 1, 'L', 1);

    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',9);
    $pdf->SetFillColor(255,255,255);
    $pdf->setXY($x, $y + 4);
    $pdf->Cell(1, 3, utf8_decode($array_uno), 0, 1, 'L', 1);
    $pdf->setXY($x, $y + 8);
    
    //Para saber si el primer elemento corresponde al empleado o a RRHH
    if($i == 1){
        $titulo = "Empleado/a";
    }
    else{
        $titulo = $gral_empresa->getDescripcion();
    }
       
    $pdf->Cell(1, 3, utf8_decode($titulo), 0, 1, 'L', 1);
    $i++;
}

$pdf->Ln(30);
//$pdf->setBloqueFirma($array = array($us_usuario_remitente->getDescripcion(), $us_mensaje->getUsUsuario()->getDescripcion()));

$pdf->Output();

?>
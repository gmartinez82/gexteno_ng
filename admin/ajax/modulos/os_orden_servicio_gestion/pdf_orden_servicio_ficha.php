<?php

/**
 * creado_por Esteban Martinez
 * @creado 10/01/2017
 * @modificado_por Esteban Martinez
 * @modificado 11/01/2016
 */
include_once "_autoload.php";

define("FPDF_FONTPATH", Gral::getPathAbs()."comps/fpdf184/font/");
include Gral::getPathAbs()."comps/fpdf184/pdf.php";


$fecha_creado            = "-";
$fecha_hecho             = "-";
$fecha_notificacion      = "-";
$fecha_descargo          = "-";
$fecha_limite_descargo   = "-";
$fecha_resolucion        = "-";
$fecha_limite_resolucion = "-";
$notificacion            = "";

$id = Gral::getVars(2, "os_id", 0);


$os_orden_servicio = OsOrdenServicio::getOxId($id);

$os_tipo_orden       = $os_orden_servicio->getOsTipo();
$os_tipo_estado      = $os_orden_servicio->getOsTipoEstado();
$per_persona         = $os_orden_servicio->getPerPersona();
$gral_empresa        = $per_persona->getGralEmpresa();
$os_prioridad        = $os_orden_servicio->getOsPrioridad();

$c = new Criterio();
$c->addTabla(OsEstado::GEN_TABLA);
$c->addOrden(OsEstado::GEN_ATTR_ID, Criterio::_ASC);
$c->setCriterios();
$os_estados     = $os_orden_servicio->getOsEstados($p = null, $c); // estados ordenados cronologicamente

$os_resolucions = $os_orden_servicio->getOsResolucions();

$user = UsUsuario::autenticado();

$fecha_creado = Date::getFechaVisual($os_orden_servicio->getFecha());

if($os_orden_servicio->getFechaHecho() != "1900-01-01"){
    $fecha_hecho = Date::getFechaVisual($os_orden_servicio->getFechaHecho());
}

if( $os_orden_servicio->getFueNotificada()){
    $fecha_notificacion = Date::getFechaVisual($os_orden_servicio->getFechaNotificacion());
}

if($os_orden_servicio->getFechaDescargo() != "1900-01-01"){
    $fecha_descargo = Date::getFechaVisual($os_orden_servicio->getFechaDescargo());
}

if($os_orden_servicio->getFechaLimiteDescargo() != "1900-01-01"){
    $fecha_limite_descargo = Date::getFechaVisual($os_orden_servicio->getFechaLimiteDescargo());
}

if($os_orden_servicio->getFechaLimiteResolucion() != "1900-01-01"){
    $fecha_limite_resolucion = Date::getFechaVisual($os_orden_servicio->getFechaLimiteResolucion());
}

if($os_orden_servicio->getFechaResolucion() != "1900-01-01"){
    $fecha_resolucion =Date::getFechaVisual($os_orden_servicio->getFechaResolucion());
}
    
if($os_orden_servicio->getNotificacion()){
    $notificacion = $os_orden_servicio->getNotificacion();
}





$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 12);
$pdf->setUsuario($user);

$pdf->Image($gral_empresa->getPathImagenCabeceraPdfOrdenServicio(), 20, 7, 170);


//La fecha como array
$arr_fecha_os = Date::getArrFecha($os_orden_servicio->getFecha());

//Cada parte de la fecha
$fecha_dia_os  = $arr_fecha_os["dia"];
$fecha_mes_os  = $arr_fecha_os["mes"];
$fecha_anio_os = $arr_fecha_os["anio"];

//El mes expresado en letras
$fecha_mes_letras_os = Date::getMesLetras($fecha_mes_os);


$os_tipo_estado = $os_orden_servicio->getOsTipoEstado();

// Pares
$x = 20;
$y = 35;//45;

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Arial", "", 11);
$pdf->SetFillColor(255,255,255);
$pdf->setXY($x, $y);
//$pdf->Cell(170, 6, utf8_decode($lugar), 0, 1, 'L', 1);

$y = $y + 4;

$pdf->setParSimple(utf8_decode("Señor: "), $per_persona->getDescripcion(), $x, $y = $y + 6);
$pdf->setParSimple("Cod: ", $os_orden_servicio->getCodigo(), $x = $x + 95, $y);

$x = 20;
$pdf->setParSimple("Legajo: ", $per_persona->getLegajo(), $x, $y = $y + 6);
$pdf->setParMultiCell("Tipo OS: ", $os_orden_servicio->getOsTipo()->getDescripcion(), $x = $x + 95, $y, $w = 60, $h = 5);

$x = 20;
$pdf->setParSimple("Empresa", $gral_empresa->getDescripcion(), $x, $y = $y + 6);


$x = 20;
$pdf->setParSimple("Prioridad: ", $os_prioridad->getDescripcion(), $x = $x + 95, $y);

$x = 20;
$pdf->setParSimple("Base", '', $x, $y = $y + 6);
$pdf->setParSimple("Estado: ", $os_tipo_estado->getDescripcion(), $x = $x + 95, $y);


$x = 20;
$pdf->setParSimple("Creado", $fecha_creado, $x, $y = $y + 6);
$pdf->setParSimple("Fecha Hecho", $fecha_hecho, $x = $x + 95, $y);


$x = 20;
$pdf->setParSimple("Fecha Notif", $fecha_notificacion, $x, $y = $y + 6);
$pdf->setParSimple("Dias Desc", $os_orden_servicio->getDiasParaDescargo(), $x = $x + 95, $y);

$x = 20;
$pdf->setParSimple("Fecha Desc", $fecha_descargo, $x, $y = $y + 6);
$pdf->setParSimple("Limit Desc",  $fecha_limite_descargo, $x = $x + 95, $y);

$x = 20;
$pdf->setParSimple("Limit Resol", $fecha_limite_resolucion, $x, $y = $y + 6);
$pdf->setParSimple("Fecha Resol",  $fecha_resolucion, $x = $x + 95, $y);


$x = 20;
$pdf->setParMultiCell("Notificacion", $notificacion, $x, $y = $y + 6, $w = 150, $h = 5);


$pdf->setY($pdf->GetY() - 9);
$pdf->setSubtitulo("Estados");

$pdf->setY($pdf->GetY() - 8);

$cont = 0;
$datos = array();
foreach($os_estados as $os_estado)
{
    $cont++;
    $tipo_estado        = $os_estado->getOsTipoEstado()->getDescripcion();
    $tipo_estado_codigo = $os_estado->getOsTipoEstado()->getCodigo();
    $fecha              = Gral::getFechaToWeb($os_estado->getFecha());
    $observacion        = $os_estado->getObservacion();
    $usuario            = $os_estado->getCreadoPorDescripcion();
    
    $dato = array(
            "fecha"       => $fecha, 
            "estado"      => $tipo_estado, 
            "observacion" => $observacion,
        );
    
    $datos[] = $dato;
}

$pdf->setTablaMultiCell($datos, array(
                "fecha"       => array(
                                       "ancho" => 25,
                                       "alineacion" => "C",
                                       "index" => "fecha",
                                       "label" => "Fecha",
                                    ),
                "estado"  => array(
                                       "ancho" => 40,
                                       "alineacion" => "L",
                                       "index" => "estado",
                                       "label" => "Estado",
                                    ),
               
                "observacion" => array(
                                       "ancho" => 115,
                                       "alineacion" => "L",
                                       "index" => "observacion",
                                       "label" => "Observaciones",
                                       ),
            ), array('margin_left' => 9)
);

/*********************/

if($os_resolucions)
{
    $y = $pdf->GetY();
    $pdf->setY($y - 10);
    $pdf->setSubtitulo("Resolucion");
    
    $pdf->setY($pdf->GetY() - 8);
    
    $cont = 0;
    $datos = array();
    foreach($os_resolucions as $os_resolucion)
    {
        $os_tipo_resolucion = $os_resolucion->getOsTipoResolucion();

        $cont++;
        
        $fecha              = Gral::getFechaToWeb($os_resolucion->getFecha());
        $os_tipo_resolucion = $os_resolucion->getOsTipoResolucion();
        
        if($os_tipo_resolucion->getCodigo() === OsTipoResolucion::TIPO_SUSPENSION)
        {
            //Gral::prr($os_resolucion);
            $dias_suspension = $os_resolucion->getOsResolucionSuspension()->getDiasSuspension();
            $fecha_suspension_inicio    = Date::getFechaVisual( $os_resolucion->getOsResolucionSuspension()->getFechaInicio() );
            $fecha_suspension_fin       = Date::getFechaVisual( $os_resolucion->getOsResolucionSuspension()->getFechaFin() );
            $fecha_suspension_reintegro = Date::getFechaVisual( $os_resolucion->getOsResolucionSuspension()->getFechaReintegro() );
        }else{
            $dias_suspension = '-';
            $fecha_suspension_inicio    = '-';
            $fecha_suspension_fin       = '-';
            $fecha_suspension_reintegro = '-';
        }
               
        $observacion = '';
        $observacion.= $os_resolucion->getObservacion();
        if($os_tipo_resolucion->getCodigo() == OsTipoResolucion::TIPO_SUSPENSION){
            $observacion.= PHP_EOL."Dias Suspension: ".$dias_suspension;
            $observacion.= PHP_EOL."Fecha Inicio Suspension: ".$fecha_suspension_inicio;
            $observacion.= PHP_EOL."Fecha Fin Suspension: ".$fecha_suspension_fin;
            $observacion.= PHP_EOL."Fecha Reintegro: ".$fecha_suspension_reintegro;
        }
        
        $dato = array(
                "fecha"           => $fecha, 
                "tipo"            => $os_tipo_resolucion->getDescripcion(),
                "dias"            => $dias_suspension,
                "fecha_inicio"    => $fecha_suspension_inicio,
                "fecha_fin"       => $fecha_suspension_fin,
                "fecha_reintegro" => $fecha_suspension_reintegro,
                "observacion" => $observacion 
        );

        $datos[] = $dato;
    }
    
    
    
    $pdf->setTablaMultiCell($datos, 
            array(
                    "fecha"           => array(
                                               "ancho" => 25,
                                               "alineacion" => "C",
                                               "index" => "fecha",
                                               "label" => "Fecha",
                                               ),
                    "tipo"            => array(
                                               "ancho" => 40,
                                               "alineacion" => "L",
                                               "index" => "tipo",
                                               "label" => "Tipo Resolucion",
                                               ),
                    "observacion"    => array(
                                              "ancho" => 115,
                                              "alineacion" => "L",
                                              "index" => "observacion",
                                              "label" => "Observaciones",
                                             ),
                
                ),
            
            array('margin_left' => 9)
    );
}



/*
$x = $pdf->GetX() + 75;
$y = $pdf->GetY() + 10;


$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(255,255,255);
$pdf->setXY($x, $y);


$pdf->Ln(30);
*/
//$pdf->setBloqueFirma($array = array($us_usuario_remitente->getDescripcion(), $us_mensaje->getUsUsuario()->getDescripcion()));

$pdf->Output();

?>
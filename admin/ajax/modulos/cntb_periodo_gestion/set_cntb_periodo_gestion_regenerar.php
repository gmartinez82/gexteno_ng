<?php
set_time_limit(0);
ini_set('memory_limit', '-1');

include "_autoload.php";

$cntb_periodo_id = Gral::getVars(Gral::VARS_POST, "cntb_periodo_id", 0);
$txa_observacion  = Gral::getVars(Gral::VARS_POST, "txa_observacion", "");

$arr["error"] = false;

// -----------------------------------------------------------------------------
// se realizan los controles de datos
// -----------------------------------------------------------------------------
if (Ctrl::esVacio($txa_observacion)){
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

$cntb_periodo = CntbPeriodo::getOxId($cntb_periodo_id);
$anio         = $cntb_periodo->getAnio();
$gral_mes     = $cntb_periodo->getGralMes();
$gral_empresa = $cntb_periodo->getCntbEjercicio()->getGralEmpresa();

$vta_comprobantes_no_contabilizados = VtaComprobante::getVtaComprobantesNoContabilizados($gral_empresa->getId(), $fecha_desde = false, $fecha_hasta = false, $gral_mes->getId(), $anio);
$pde_comprobantes_no_contabilizados = PdeComprobante::getPdeComprobantesNoContabilizados($gral_empresa->getId(), $fecha_desde = false, $fecha_hasta = false, $gral_mes->getId(), $anio);
/*
if(count($vta_comprobantes_no_contabilizados['VtaComprobantes']) > 0 || count($pde_comprobantes_no_contabilizados['PdeComprobantes']) > 0)
{
    $arr["error"] = true;
    
    foreach($vta_comprobantes_no_contabilizados['VtaComprobantes'] as $arr_vta_comprobantes){
        foreach($arr_vta_comprobantes as $vta_tipo_comprobante => $vta_comprobante){
            $arr["arr_comprobantes"]['vta_comprobantes'][$vta_tipo_comprobante]['id'] = $vta_comprobante->getId();
            $arr["arr_comprobantes"]['vta_comprobantes'][$vta_tipo_comprobante]['numero_comprobante_completo_full'] = $vta_comprobante->getNumeroComprobanteCompletoFull();
            $arr["arr_comprobantes"]['vta_comprobantes'][$vta_tipo_comprobante]['persona'] = $vta_comprobante->getPersonaDescripcion();
            $arr["arr_comprobantes"]['vta_comprobantes'][$vta_tipo_comprobante]['fecha'] = $vta_comprobante->getFechaEmision();
        }
    }
    
    foreach($pde_comprobantes_no_contabilizados['PdeComprobantes'] as $arr_pde_comprobantes){
        foreach($arr_pde_comprobantes as $pde_tipo_comprobante => $pde_comprobante){
            $arr["arr_comprobantes"]['pde_comprobantes'][$pde_tipo_comprobante]['id'] = $pde_comprobante->getId();
            $arr["arr_comprobantes"]['pde_comprobantes'][$pde_tipo_comprobante]['numero_comprobante_completo_full'] = $pde_comprobante->getNumeroComprobanteCompletoFull();
            $arr["arr_comprobantes"]['pde_comprobantes'][$pde_tipo_comprobante]['persona'] = $pde_comprobante->getPersonaDescripcion();
            $arr["arr_comprobantes"]['pde_comprobantes'][$pde_tipo_comprobante]['fecha'] = $pde_comprobante->getFechaEmision();
        }
    }
}
*/
if (!$arr["error"])
{
    if($cntb_periodo)
    {
        CntbPeriodo::setInicializarCntbPeriodo($gral_empresa->getId(), $cntb_periodo->getCntbEjercicioId(), $gral_mes->getId(), $anio, $txa_observacion);
    }
}

//Gral::prr($arr);
// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>
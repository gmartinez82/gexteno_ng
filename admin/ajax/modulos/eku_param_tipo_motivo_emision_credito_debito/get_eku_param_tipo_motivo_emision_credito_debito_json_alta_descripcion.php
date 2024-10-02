<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se consulta array unificado
// -----------------------------------------------------------------------------
$arr_unificados = EkuParamTipoMotivoEmisionCreditoDebito::getArrDescripcionsUnificado();

// -----------------------------------------------------------------------------
// se carga array unificado para devolver
// -----------------------------------------------------------------------------
foreach($arr_unificados as $arr_unificado){
    $arr_os = $arr_unificado;
    $arr[] = $arr_os;
} 

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;


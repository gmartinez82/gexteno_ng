<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuParamDenominacionTarjetaGralFpMedioPago::getSesPagCantidad(), EkuParamDenominacionTarjetaGralFpMedioPago::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_param_denominacion_tarjeta_gral_fp_medio_pago = EkuParamDenominacionTarjetaGralFpMedioPago::getOxId($identificador);
        if($eku_param_denominacion_tarjeta_gral_fp_medio_pago){
            $eku_param_denominacion_tarjeta_gral_fp_medio_pago->setOrden($orden_paginado);
            $eku_param_denominacion_tarjeta_gral_fp_medio_pago->saveDesdeProceso();
        }
    }
    
}


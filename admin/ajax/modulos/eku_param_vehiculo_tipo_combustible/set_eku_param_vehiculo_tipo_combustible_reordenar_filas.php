<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuParamVehiculoTipoCombustible::getSesPagCantidad(), EkuParamVehiculoTipoCombustible::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_VEHICULO_TIPO_COMBUSTIBLE_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_param_vehiculo_tipo_combustible = EkuParamVehiculoTipoCombustible::getOxId($identificador);
        if($eku_param_vehiculo_tipo_combustible){
            $eku_param_vehiculo_tipo_combustible->setOrden($orden_paginado);
            $eku_param_vehiculo_tipo_combustible->saveDesdeProceso();
        }
    }
    
}


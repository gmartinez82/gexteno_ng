<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(GralSucursalValoracionTipoItem::getSesPagCantidad(), GralSucursalValoracionTipoItem::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $gral_sucursal_valoracion_tipo_item = GralSucursalValoracionTipoItem::getOxId($identificador);
        if($gral_sucursal_valoracion_tipo_item){
            $gral_sucursal_valoracion_tipo_item->setOrden($orden_paginado);
            $gral_sucursal_valoracion_tipo_item->saveDesdeProceso();
        }
    }
    
}


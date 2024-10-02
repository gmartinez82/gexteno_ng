<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(VtaVendedorValoracionAgrupacion::getSesPagCantidad(), VtaVendedorValoracionAgrupacion::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_AGRUPACION_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $vta_vendedor_valoracion_agrupacion = VtaVendedorValoracionAgrupacion::getOxId($identificador);
        if($vta_vendedor_valoracion_agrupacion){
            $vta_vendedor_valoracion_agrupacion->setOrden($orden_paginado);
            $vta_vendedor_valoracion_agrupacion->saveDesdeProceso();
        }
    }
    
}


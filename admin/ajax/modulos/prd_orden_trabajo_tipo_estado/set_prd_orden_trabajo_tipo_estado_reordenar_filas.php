<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(PrdOrdenTrabajoTipoEstado::getSesPagCantidad(), PrdOrdenTrabajoTipoEstado::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_TIPO_ESTADO_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $prd_orden_trabajo_tipo_estado = PrdOrdenTrabajoTipoEstado::getOxId($identificador);
        if($prd_orden_trabajo_tipo_estado){
            $prd_orden_trabajo_tipo_estado->setOrden($orden_paginado);
            $prd_orden_trabajo_tipo_estado->saveDesdeProceso();
        }
    }
    
}


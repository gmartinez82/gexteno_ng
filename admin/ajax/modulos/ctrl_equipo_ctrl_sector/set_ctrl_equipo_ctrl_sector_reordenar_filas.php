<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(CtrlEquipoCtrlSector::getSesPagCantidad(), CtrlEquipoCtrlSector::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_CTRL_SECTOR_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $ctrl_equipo_ctrl_sector = CtrlEquipoCtrlSector::getOxId($identificador);
        if($ctrl_equipo_ctrl_sector){
            $ctrl_equipo_ctrl_sector->setOrden($orden_paginado);
            $ctrl_equipo_ctrl_sector->saveDesdeProceso();
        }
    }
    
}


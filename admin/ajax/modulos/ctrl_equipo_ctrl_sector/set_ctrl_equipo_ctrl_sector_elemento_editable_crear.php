<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se realizan los controles de datos
// -----------------------------------------------------------------------------
$arr['error'] = false;

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_CTRL_SECTOR_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $ctrl_equipo_ctrl_sector = CtrlEquipoCtrlSector::setInicializarRegistroSimple();
    if($ctrl_equipo_ctrl_sector){
        $arr['id'] = $ctrl_equipo_ctrl_sector->getId();
        $arr['hash'] = $ctrl_equipo_ctrl_sector->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;


<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_INSUMO_INSTANCIA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ins_insumo_instancia = new InsInsumoInstancia();
    $ins_insumo_instancia->setId($id, false);
    $ins_insumo_instancia->deleteAll();
}    
?>


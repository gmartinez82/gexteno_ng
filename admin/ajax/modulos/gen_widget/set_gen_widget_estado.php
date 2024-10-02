<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_WIDGET_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gen_widget = GenWidget::getOxId($id);
    if($gen_widget->getEstado() == 1){
        $gen_widget->setEstado(0);
    }else{
        $gen_widget->setEstado(1);
    }
    $gen_widget->cambiarEstado();
}        
?>


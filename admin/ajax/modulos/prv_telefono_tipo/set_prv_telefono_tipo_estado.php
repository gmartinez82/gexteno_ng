<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_TELEFONO_TIPO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_telefono_tipo = PrvTelefonoTipo::getOxId($id);
    if($prv_telefono_tipo->getEstado() == 1){
        $prv_telefono_tipo->setEstado(0);
    }else{
        $prv_telefono_tipo->setEstado(1);
    }
    $prv_telefono_tipo->cambiarEstado();
}        
?>


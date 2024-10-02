<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_ARBOL_TIPO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gen_arbol_tipo = GenArbolTipo::getOxId($id);
    if($gen_arbol_tipo->getEstado() == 1){
        $gen_arbol_tipo->setEstado(0);
    }else{
        $gen_arbol_tipo->setEstado(1);
    }
    $gen_arbol_tipo->cambiarEstado();
}        
?>


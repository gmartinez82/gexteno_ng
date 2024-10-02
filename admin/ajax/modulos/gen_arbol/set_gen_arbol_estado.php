<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_ARBOL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gen_arbol = GenArbol::getOxId($id);
    if($gen_arbol->getEstado() == 1){
        $gen_arbol->setEstado(0);
    }else{
        $gen_arbol->setEstado(1);
    }
    $gen_arbol->cambiarEstado();
}        
?>


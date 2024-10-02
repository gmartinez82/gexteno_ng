<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PAN_UBI_PISO_ALTA_RELACION_INS_INSUMO_ACCIONES_SELECCION')){
    $id = Gral::getVars(1, 'id');
    $relacion_id = Gral::getVars(1, 'relacion_id');
    $checked = Gral::getVars(1, 'checked');
    $relacion = Gral::getVars(1, 'relacion');
    $padre = Gral::getVars(1, 'padre');
    $padre_id = Gral::getVars(1, 'padre_id');
    $padre_clase = Gral::getVars(1, 'padre_clase');

    $o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');

    if($checked == 'checked' or $checked == 'true'){
        $o = new InsInsumoPanPanol();
        $o->setPanUbiPisoId($o_padre->getId());
        $o->setInsInsumoId($id);
        $o->saveDesdeRelacion();
    }else{
        $o = InsInsumoPanPanol::getOxId($relacion_id);
        $o->delete();
    }
}
?>

<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_ALTA_RELACION_GRAL_FP_MEDIO_PAGO_ACCIONES_SELECCION')){
    $id = Gral::getVars(1, 'id');
    $relacion_id = Gral::getVars(1, 'relacion_id');
    $checked = Gral::getVars(1, 'checked');
    $relacion = Gral::getVars(1, 'relacion');
    $padre = Gral::getVars(1, 'padre');
    $padre_id = Gral::getVars(1, 'padre_id');
    $padre_clase = Gral::getVars(1, 'padre_clase');

    $o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');

    if($checked == 'checked' or $checked == 'true'){
        $o = new EkuParamDenominacionTarjetaGralFpMedioPago();
        $o->setEkuParamDenominacionTarjetaId($o_padre->getId());
        $o->setGralFpMedioPagoId($id);
        $o->saveDesdeRelacion();
    }else{
        $o = EkuParamDenominacionTarjetaGralFpMedioPago::getOxId($relacion_id);
        $o->delete();
    }
}
?>

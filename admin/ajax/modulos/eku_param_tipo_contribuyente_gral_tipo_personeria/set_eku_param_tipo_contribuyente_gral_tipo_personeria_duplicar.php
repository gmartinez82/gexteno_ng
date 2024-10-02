<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_GRAL_TIPO_PERSONERIA_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_param_tipo_contribuyente_gral_tipo_personeria = EkuParamTipoContribuyenteGralTipoPersoneria::getOxId($id);
    $eku_param_tipo_contribuyente_gral_tipo_personeria->duplicarEkuParamTipoContribuyenteGralTipoPersoneria();
}    


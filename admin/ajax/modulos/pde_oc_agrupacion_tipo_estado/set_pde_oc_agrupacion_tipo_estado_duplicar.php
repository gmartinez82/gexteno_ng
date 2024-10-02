<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_TIPO_ESTADO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $pde_oc_agrupacion_tipo_estado = PdeOcAgrupacionTipoEstado::getOxId($id);
    $pde_oc_agrupacion_tipo_estado->duplicarPdeOcAgrupacionTipoEstado();
}    


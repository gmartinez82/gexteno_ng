<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_param_tipo_documento_gral_tipo_documento = EkuParamTipoDocumentoGralTipoDocumento::getOxId($id);

include 'eku_param_tipo_documento_gral_tipo_documento_uno.php';
?>


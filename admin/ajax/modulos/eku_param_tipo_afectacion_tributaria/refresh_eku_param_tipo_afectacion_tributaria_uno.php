<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_param_tipo_afectacion_tributaria = EkuParamTipoAfectacionTributaria::getOxId($id);

$estado = ($eku_param_tipo_afectacion_tributaria->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_param_tipo_afectacion_tributaria_uno.php';
?>


<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaTributoWsFeParamTipoTributo::SES_CRITERIOS);
$criterio->addTabla('vta_tributo_ws_fe_param_tipo_tributo');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>


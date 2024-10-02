<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(InsInsumoBultoInsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTabla('ins_insumo_bulto_ins_tipo_lista_precio');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>


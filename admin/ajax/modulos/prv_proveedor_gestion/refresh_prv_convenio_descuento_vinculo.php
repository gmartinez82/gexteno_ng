<?php
include_once '_autoload.php';
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(1, 'id');
$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');

$prv_convenio_descuento = PrvConvenioDescuento::getOxId($id);
include 'uno_prv_convenio_descuento_vinculo.php';
?>

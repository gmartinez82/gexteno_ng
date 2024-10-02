<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OsTipo::setSesPag($pag);

$criterio = new Criterio(OsTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('os_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OsTipo::getSesPagCantidad(), OsTipo::getSesPag());
$os_tipos = OsTipo::getOsTiposDesdeBackend($paginador, $criterio);

include 'os_tipo_datos.php';
?>


<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaTipoEgreso::setSesPag($pag);

$criterio = new Criterio(FndCajaTipoEgreso::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaTipoEgreso::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_tipo_egreso');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaTipoEgreso::getSesPagCantidad(), FndCajaTipoEgreso::getSesPag());
$fnd_caja_tipo_egresos = FndCajaTipoEgreso::getFndCajaTipoEgresosDesdeBackend($paginador, $criterio);

include 'fnd_caja_tipo_egreso_datos.php';
?>


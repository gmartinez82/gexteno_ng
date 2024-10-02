<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdiTipoOrigen::setSesPag($pag);

$criterio = new Criterio(PdiTipoOrigen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiTipoOrigen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pdi_tipo_origen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdiTipoOrigen::getSesPagCantidad(), PdiTipoOrigen::getSesPag());
$pdi_tipo_origens = PdiTipoOrigen::getPdiTipoOrigensDesdeBackend($paginador, $criterio);

include 'pdi_tipo_origen_datos.php';
?>


<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdTipoOrigen::setSesPag($pag);

$criterio = new Criterio(PrdTipoOrigen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdTipoOrigen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_tipo_origen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdTipoOrigen::getSesPagCantidad(), PrdTipoOrigen::getSesPag());
$prd_tipo_origens = PrdTipoOrigen::getPrdTipoOrigensDesdeBackend($paginador, $criterio);

include 'prd_tipo_origen_datos.php';
?>


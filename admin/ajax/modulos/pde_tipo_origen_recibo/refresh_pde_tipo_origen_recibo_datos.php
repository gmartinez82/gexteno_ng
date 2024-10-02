<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoOrigenRecibo::setSesPag($pag);

$criterio = new Criterio(PdeTipoOrigenRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoOrigenRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_origen_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoOrigenRecibo::getSesPagCantidad(), PdeTipoOrigenRecibo::getSesPag());
$pde_tipo_origen_recibos = PdeTipoOrigenRecibo::getPdeTipoOrigenRecibosDesdeBackend($paginador, $criterio);

include 'pde_tipo_origen_recibo_datos.php';
?>


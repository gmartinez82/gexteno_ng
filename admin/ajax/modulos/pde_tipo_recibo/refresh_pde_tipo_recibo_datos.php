<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoRecibo::setSesPag($pag);

$criterio = new Criterio(PdeTipoRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoRecibo::getSesPagCantidad(), PdeTipoRecibo::getSesPag());
$pde_tipo_recibos = PdeTipoRecibo::getPdeTipoRecibosDesdeBackend($paginador, $criterio);

include 'pde_tipo_recibo_datos.php';
?>


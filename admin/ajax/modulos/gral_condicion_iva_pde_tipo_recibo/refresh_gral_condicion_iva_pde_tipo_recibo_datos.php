<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCondicionIvaPdeTipoRecibo::setSesPag($pag);

$criterio = new Criterio(GralCondicionIvaPdeTipoRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCondicionIvaPdeTipoRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_condicion_iva_pde_tipo_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCondicionIvaPdeTipoRecibo::getSesPagCantidad(), GralCondicionIvaPdeTipoRecibo::getSesPag());
$gral_condicion_iva_pde_tipo_recibos = GralCondicionIvaPdeTipoRecibo::getGralCondicionIvaPdeTipoRecibosDesdeBackend($paginador, $criterio);

include 'gral_condicion_iva_pde_tipo_recibo_datos.php';
?>


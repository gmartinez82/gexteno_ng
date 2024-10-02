<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralMonedaTipoCambio::setSesPag($pag);

$criterio = new Criterio(GralMonedaTipoCambio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralMonedaTipoCambio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_moneda_tipo_cambio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralMonedaTipoCambio::getSesPagCantidad(), GralMonedaTipoCambio::getSesPag());
$gral_moneda_tipo_cambios = GralMonedaTipoCambio::getGralMonedaTipoCambiosDesdeBackend($paginador, $criterio);

include 'gral_moneda_tipo_cambio_datos.php';
?>


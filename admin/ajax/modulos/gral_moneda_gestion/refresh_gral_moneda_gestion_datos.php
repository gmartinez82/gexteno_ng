<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
GralMoneda::setSesPag($pag);

$criterio = new Criterio(GralMoneda::SES_CRITERIOS);
$criterio->add(GralMoneda::GEN_ATTR_MONEDA_BASE, 1, Criterio::IGUAL);
$criterio->addTabla('gral_moneda');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralMoneda::getSesPagCantidad(), GralMoneda::getSesPag());
$gral_monedas = GralMoneda::getGralMonedas($paginador, $criterio);

include 'gral_moneda_gestion_datos.php';
?>


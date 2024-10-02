<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCondicionIva::setSesPag($pag);

$criterio = new Criterio(GralCondicionIva::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCondicionIva::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_condicion_iva');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCondicionIva::getSesPagCantidad(), GralCondicionIva::getSesPag());
$gral_condicion_ivas = GralCondicionIva::getGralCondicionIvasDesdeBackend($paginador, $criterio);

include 'gral_condicion_iva_datos.php';
?>


<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralBanco::setSesPag($pag);

$criterio = new Criterio(GralBanco::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralBanco::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_banco');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralBanco::getSesPagCantidad(), GralBanco::getSesPag());
$gral_bancos = GralBanco::getGralBancosDesdeBackend($paginador, $criterio);

include 'gral_banco_datos.php';
?>


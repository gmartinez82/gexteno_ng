<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralBillete::setSesPag($pag);

$criterio = new Criterio(GralBillete::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralBillete::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_billete');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralBillete::getSesPagCantidad(), GralBillete::getSesPag());
$gral_billetes = GralBillete::getGralBilletesDesdeBackend($paginador, $criterio);

include 'gral_billete_datos.php';
?>


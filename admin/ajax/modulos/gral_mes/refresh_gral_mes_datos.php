<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralMes::setSesPag($pag);

$criterio = new Criterio(GralMes::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralMes::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_mes');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralMes::getSesPagCantidad(), GralMes::getSesPag());
$gral_mess = GralMes::getGralMessDesdeBackend($paginador, $criterio);

include 'gral_mes_datos.php';
?>


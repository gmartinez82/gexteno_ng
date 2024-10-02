<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSexo::setSesPag($pag);

$criterio = new Criterio(GralSexo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSexo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sexo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSexo::getSesPagCantidad(), GralSexo::getSesPag());
$gral_sexos = GralSexo::getGralSexosDesdeBackend($paginador, $criterio);

include 'gral_sexo_datos.php';
?>


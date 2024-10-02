<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
MlAutorization::setSesPag($pag);

$criterio = new Criterio(MlAutorization::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlAutorization::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ml_autorization');
$criterio->setCriteriosInicial();

$paginador = new Paginador(MlAutorization::getSesPagCantidad(), MlAutorization::getSesPag());
$ml_autorizations = MlAutorization::getMlAutorizationsDesdeBackend($paginador, $criterio);

include 'ml_autorization_datos.php';
?>


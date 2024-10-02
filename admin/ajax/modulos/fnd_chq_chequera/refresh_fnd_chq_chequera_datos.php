<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndChqChequera::setSesPag($pag);

$criterio = new Criterio(FndChqChequera::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqChequera::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_chq_chequera');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndChqChequera::getSesPagCantidad(), FndChqChequera::getSesPag());
$fnd_chq_chequeras = FndChqChequera::getFndChqChequerasDesdeBackend($paginador, $criterio);

include 'fnd_chq_chequera_datos.php';
?>


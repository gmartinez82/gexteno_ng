<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndChqCheque::setSesPag($pag);

$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqCheque::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_chq_cheque');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndChqCheque::getSesPagCantidad(), FndChqCheque::getSesPag());
$fnd_chq_cheques = FndChqCheque::getFndChqChequesDesdeBackend($paginador, $criterio);

include 'fnd_chq_cheque_datos.php';
?>


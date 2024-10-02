<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbDiarioAsiento::setSesPag($pag);

$criterio = new Criterio(CntbDiarioAsiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_diario_asiento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbDiarioAsiento::getSesPagCantidad(), CntbDiarioAsiento::getSesPag());
$cntb_diario_asientos = CntbDiarioAsiento::getCntbDiarioAsientosDesdeBackend($paginador, $criterio);

include 'cntb_diario_asiento_datos.php';
?>


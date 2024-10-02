<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenPrcaProceso::setSesPag($pag);

$criterio = new Criterio(GenPrcaProceso::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenPrcaProceso::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_prca_proceso');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenPrcaProceso::getSesPagCantidad(), GenPrcaProceso::getSesPag());
$gen_prca_procesos = GenPrcaProceso::getGenPrcaProcesosDesdeBackend($paginador, $criterio);

include 'gen_prca_proceso_datos.php';
?>


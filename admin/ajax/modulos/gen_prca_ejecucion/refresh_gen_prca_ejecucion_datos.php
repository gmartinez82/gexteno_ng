<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenPrcaEjecucion::setSesPag($pag);

$criterio = new Criterio(GenPrcaEjecucion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenPrcaEjecucion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_prca_ejecucion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenPrcaEjecucion::getSesPagCantidad(), GenPrcaEjecucion::getSesPag());
$gen_prca_ejecucions = GenPrcaEjecucion::getGenPrcaEjecucionsDesdeBackend($paginador, $criterio);

include 'gen_prca_ejecucion_datos.php';
?>


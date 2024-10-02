<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenPrcaEjecucionDetalle::setSesPag($pag);

$criterio = new Criterio(GenPrcaEjecucionDetalle::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenPrcaEjecucionDetalle::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_prca_ejecucion_detalle');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenPrcaEjecucionDetalle::getSesPagCantidad(), GenPrcaEjecucionDetalle::getSesPag());
$gen_prca_ejecucion_detalles = GenPrcaEjecucionDetalle::getGenPrcaEjecucionDetallesDesdeBackend($paginador, $criterio);

include 'gen_prca_ejecucion_detalle_datos.php';
?>


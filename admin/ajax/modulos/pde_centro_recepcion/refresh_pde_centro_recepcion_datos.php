<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCentroRecepcion::setSesPag($pag);

$criterio = new Criterio(PdeCentroRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCentroRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_centro_recepcion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCentroRecepcion::getSesPagCantidad(), PdeCentroRecepcion::getSesPag());
$pde_centro_recepcions = PdeCentroRecepcion::getPdeCentroRecepcionsDesdeBackend($paginador, $criterio);

include 'pde_centro_recepcion_datos.php';
?>


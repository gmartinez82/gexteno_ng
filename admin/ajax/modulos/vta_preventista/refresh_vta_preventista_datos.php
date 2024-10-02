<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPreventista::setSesPag($pag);

$criterio = new Criterio(VtaPreventista::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPreventista::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_preventista');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPreventista::getSesPagCantidad(), VtaPreventista::getSesPag());
$vta_preventistas = VtaPreventista::getVtaPreventistasDesdeBackend($paginador, $criterio);

include 'vta_preventista_datos.php';
?>


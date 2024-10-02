<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvPreventista::setSesPag($pag);

$criterio = new Criterio(PrvPreventista::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvPreventista::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_preventista');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvPreventista::getSesPagCantidad(), PrvPreventista::getSesPag());
$prv_preventistas = PrvPreventista::getPrvPreventistasDesdeBackend($paginador, $criterio);

include 'prv_preventista_datos.php';
?>


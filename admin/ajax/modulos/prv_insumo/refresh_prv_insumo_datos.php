<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvInsumo::setSesPag($pag);

$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvInsumo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_insumo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvInsumo::getSesPagCantidad(), PrvInsumo::getSesPag());
$prv_insumos = PrvInsumo::getPrvInsumosDesdeBackend($paginador, $criterio);

include 'prv_insumo_datos.php';
?>


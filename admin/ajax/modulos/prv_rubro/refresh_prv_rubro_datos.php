<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvRubro::setSesPag($pag);

$criterio = new Criterio(PrvRubro::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvRubro::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_rubro');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvRubro::getSesPagCantidad(), PrvRubro::getSesPag());
$prv_rubros = PrvRubro::getPrvRubrosDesdeBackend($paginador, $criterio);

include 'prv_rubro_datos.php';
?>


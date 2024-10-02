<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbTipoAsiento::setSesPag($pag);

$criterio = new Criterio(CntbTipoAsiento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbTipoAsiento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_tipo_asiento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbTipoAsiento::getSesPagCantidad(), CntbTipoAsiento::getSesPag());
$cntb_tipo_asientos = CntbTipoAsiento::getCntbTipoAsientosDesdeBackend($paginador, $criterio);

include 'cntb_tipo_asiento_datos.php';
?>


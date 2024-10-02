<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbTipoOrigen::setSesPag($pag);

$criterio = new Criterio(CntbTipoOrigen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbTipoOrigen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_tipo_origen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbTipoOrigen::getSesPagCantidad(), CntbTipoOrigen::getSesPag());
$cntb_tipo_origens = CntbTipoOrigen::getCntbTipoOrigensDesdeBackend($paginador, $criterio);

include 'cntb_tipo_origen_datos.php';
?>


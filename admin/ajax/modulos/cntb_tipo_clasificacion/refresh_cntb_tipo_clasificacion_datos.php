<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CntbTipoClasificacion::setSesPag($pag);

$criterio = new Criterio(CntbTipoClasificacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbTipoClasificacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cntb_tipo_clasificacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CntbTipoClasificacion::getSesPagCantidad(), CntbTipoClasificacion::getSesPag());
$cntb_tipo_clasificacions = CntbTipoClasificacion::getCntbTipoClasificacionsDesdeBackend($paginador, $criterio);

include 'cntb_tipo_clasificacion_datos.php';
?>


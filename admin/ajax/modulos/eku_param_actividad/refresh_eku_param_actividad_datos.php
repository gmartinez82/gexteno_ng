<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamActividad::setSesPag($pag);

$criterio = new Criterio(EkuParamActividad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamActividad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_actividad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamActividad::getSesPagCantidad(), EkuParamActividad::getSesPag());
$eku_param_actividads = EkuParamActividad::getEkuParamActividadsDesdeBackend($paginador, $criterio);

include 'eku_param_actividad_datos.php';
?>


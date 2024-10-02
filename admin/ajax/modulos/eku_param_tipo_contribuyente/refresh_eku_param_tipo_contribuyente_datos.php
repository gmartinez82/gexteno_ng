<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoContribuyente::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoContribuyente::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoContribuyente::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_contribuyente');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoContribuyente::getSesPagCantidad(), EkuParamTipoContribuyente::getSesPag());
$eku_param_tipo_contribuyentes = EkuParamTipoContribuyente::getEkuParamTipoContribuyentesDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_contribuyente_datos.php';
?>


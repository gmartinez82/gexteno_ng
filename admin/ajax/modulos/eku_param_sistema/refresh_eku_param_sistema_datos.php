<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamSistema::setSesPag($pag);

$criterio = new Criterio(EkuParamSistema::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamSistema::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_sistema');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamSistema::getSesPagCantidad(), EkuParamSistema::getSesPag());
$eku_param_sistemas = EkuParamSistema::getEkuParamSistemasDesdeBackend($paginador, $criterio);

include 'eku_param_sistema_datos.php';
?>


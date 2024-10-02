<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamGeoDepartamento::setSesPag($pag);

$criterio = new Criterio(EkuParamGeoDepartamento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamGeoDepartamento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_geo_departamento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamGeoDepartamento::getSesPagCantidad(), EkuParamGeoDepartamento::getSesPag());
$eku_param_geo_departamentos = EkuParamGeoDepartamento::getEkuParamGeoDepartamentosDesdeBackend($paginador, $criterio);

include 'eku_param_geo_departamento_datos.php';
?>


<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoNaturalezaVendedor::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoNaturalezaVendedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoNaturalezaVendedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_naturaleza_vendedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoNaturalezaVendedor::getSesPagCantidad(), EkuParamTipoNaturalezaVendedor::getSesPag());
$eku_param_tipo_naturaleza_vendedors = EkuParamTipoNaturalezaVendedor::getEkuParamTipoNaturalezaVendedorsDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_naturaleza_vendedor_datos.php';
?>


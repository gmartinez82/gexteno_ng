<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoNaturalezaReceptor::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoNaturalezaReceptor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoNaturalezaReceptor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_naturaleza_receptor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoNaturalezaReceptor::getSesPagCantidad(), EkuParamTipoNaturalezaReceptor::getSesPag());
$eku_param_tipo_naturaleza_receptors = EkuParamTipoNaturalezaReceptor::getEkuParamTipoNaturalezaReceptorsDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_naturaleza_receptor_datos.php';
?>


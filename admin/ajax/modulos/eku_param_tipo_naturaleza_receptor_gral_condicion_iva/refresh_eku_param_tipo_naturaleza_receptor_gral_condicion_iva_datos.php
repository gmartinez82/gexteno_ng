<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoNaturalezaReceptorGralCondicionIva::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoNaturalezaReceptorGralCondicionIva::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoNaturalezaReceptorGralCondicionIva::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_naturaleza_receptor_gral_condicion_iva');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoNaturalezaReceptorGralCondicionIva::getSesPagCantidad(), EkuParamTipoNaturalezaReceptorGralCondicionIva::getSesPag());
$eku_param_tipo_naturaleza_receptor_gral_condicion_ivas = EkuParamTipoNaturalezaReceptorGralCondicionIva::getEkuParamTipoNaturalezaReceptorGralCondicionIvasDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_naturaleza_receptor_gral_condicion_iva_datos.php';
?>


<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamResponsableEmisionRemito::setSesPag($pag);

$criterio = new Criterio(EkuParamResponsableEmisionRemito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamResponsableEmisionRemito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_responsable_emision_remito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamResponsableEmisionRemito::getSesPagCantidad(), EkuParamResponsableEmisionRemito::getSesPag());
$eku_param_responsable_emision_remitos = EkuParamResponsableEmisionRemito::getEkuParamResponsableEmisionRemitosDesdeBackend($paginador, $criterio);

include 'eku_param_responsable_emision_remito_datos.php';
?>


<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoMotivoEmisionRemito::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoMotivoEmisionRemito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoMotivoEmisionRemito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_motivo_emision_remito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoMotivoEmisionRemito::getSesPagCantidad(), EkuParamTipoMotivoEmisionRemito::getSesPag());
$eku_param_tipo_motivo_emision_remitos = EkuParamTipoMotivoEmisionRemito::getEkuParamTipoMotivoEmisionRemitosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_motivo_emision_remito_datos.php';
?>


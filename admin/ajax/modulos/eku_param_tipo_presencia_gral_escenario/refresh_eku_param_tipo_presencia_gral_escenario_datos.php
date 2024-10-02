<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoPresenciaGralEscenario::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoPresenciaGralEscenario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoPresenciaGralEscenario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_presencia_gral_escenario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoPresenciaGralEscenario::getSesPagCantidad(), EkuParamTipoPresenciaGralEscenario::getSesPag());
$eku_param_tipo_presencia_gral_escenarios = EkuParamTipoPresenciaGralEscenario::getEkuParamTipoPresenciaGralEscenariosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_presencia_gral_escenario_datos.php';
?>


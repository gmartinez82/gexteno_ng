<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTransporteResponsableFlete::setSesPag($pag);

$criterio = new Criterio(EkuParamTransporteResponsableFlete::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTransporteResponsableFlete::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_transporte_responsable_flete');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTransporteResponsableFlete::getSesPagCantidad(), EkuParamTransporteResponsableFlete::getSesPag());
$eku_param_transporte_responsable_fletes = EkuParamTransporteResponsableFlete::getEkuParamTransporteResponsableFletesDesdeBackend($paginador, $criterio);

include 'eku_param_transporte_responsable_flete_datos.php';
?>


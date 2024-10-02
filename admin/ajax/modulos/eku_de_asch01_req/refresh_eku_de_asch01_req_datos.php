<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeAsch01Req::setSesPag($pag);

$criterio = new Criterio(EkuDeAsch01Req::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeAsch01Req::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_asch01_req');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeAsch01Req::getSesPagCantidad(), EkuDeAsch01Req::getSesPag());
$eku_de_asch01_reqs = EkuDeAsch01Req::getEkuDeAsch01ReqsDesdeBackend($paginador, $criterio);

include 'eku_de_asch01_req_datos.php';
?>


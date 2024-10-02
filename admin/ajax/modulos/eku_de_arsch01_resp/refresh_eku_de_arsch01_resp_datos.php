<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeArsch01Resp::setSesPag($pag);

$criterio = new Criterio(EkuDeArsch01Resp::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeArsch01Resp::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_arsch01_resp');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeArsch01Resp::getSesPagCantidad(), EkuDeArsch01Resp::getSesPag());
$eku_de_arsch01_resps = EkuDeArsch01Resp::getEkuDeArsch01RespsDesdeBackend($paginador, $criterio);

include 'eku_de_arsch01_resp_datos.php';
?>


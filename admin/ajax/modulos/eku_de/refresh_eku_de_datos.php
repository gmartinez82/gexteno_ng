<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDe::setSesPag($pag);

$criterio = new Criterio(EkuDe::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDe::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDe::getSesPagCantidad(), EkuDe::getSesPag());
$eku_des = EkuDe::getEkuDesDesdeBackend($paginador, $criterio);

include 'eku_de_datos.php';
?>


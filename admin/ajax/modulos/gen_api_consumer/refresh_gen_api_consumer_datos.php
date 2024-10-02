<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenApiConsumer::setSesPag($pag);

$criterio = new Criterio(GenApiConsumer::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenApiConsumer::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_api_consumer');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenApiConsumer::getSesPagCantidad(), GenApiConsumer::getSesPag());
$gen_api_consumers = GenApiConsumer::getGenApiConsumersDesdeBackend($paginador, $criterio);

include 'gen_api_consumer_datos.php';
?>


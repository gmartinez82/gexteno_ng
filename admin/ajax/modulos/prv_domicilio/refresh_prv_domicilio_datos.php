<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvDomicilio::setSesPag($pag);

$criterio = new Criterio(PrvDomicilio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvDomicilio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_domicilio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvDomicilio::getSesPagCantidad(), PrvDomicilio::getSesPag());
$prv_domicilios = PrvDomicilio::getPrvDomiciliosDesdeBackend($paginador, $criterio);

include 'prv_domicilio_datos.php';
?>


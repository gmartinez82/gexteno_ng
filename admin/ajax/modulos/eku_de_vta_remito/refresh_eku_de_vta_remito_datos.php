<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeVtaRemito::setSesPag($pag);

$criterio = new Criterio(EkuDeVtaRemito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeVtaRemito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_vta_remito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeVtaRemito::getSesPagCantidad(), EkuDeVtaRemito::getSesPag());
$eku_de_vta_remitos = EkuDeVtaRemito::getEkuDeVtaRemitosDesdeBackend($paginador, $criterio);

include 'eku_de_vta_remito_datos.php';
?>


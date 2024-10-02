<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeVtaNotaCredito::setSesPag($pag);

$criterio = new Criterio(EkuDeVtaNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeVtaNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_vta_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeVtaNotaCredito::getSesPagCantidad(), EkuDeVtaNotaCredito::getSesPag());
$eku_de_vta_nota_creditos = EkuDeVtaNotaCredito::getEkuDeVtaNotaCreditosDesdeBackend($paginador, $criterio);

include 'eku_de_vta_nota_credito_datos.php';
?>


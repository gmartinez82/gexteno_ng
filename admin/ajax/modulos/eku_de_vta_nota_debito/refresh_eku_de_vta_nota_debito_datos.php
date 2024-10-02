<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeVtaNotaDebito::setSesPag($pag);

$criterio = new Criterio(EkuDeVtaNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeVtaNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_vta_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeVtaNotaDebito::getSesPagCantidad(), EkuDeVtaNotaDebito::getSesPag());
$eku_de_vta_nota_debitos = EkuDeVtaNotaDebito::getEkuDeVtaNotaDebitosDesdeBackend($paginador, $criterio);

include 'eku_de_vta_nota_debito_datos.php';
?>


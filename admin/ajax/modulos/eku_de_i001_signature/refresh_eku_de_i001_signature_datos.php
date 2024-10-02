<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeI001Signature::setSesPag($pag);

$criterio = new Criterio(EkuDeI001Signature::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeI001Signature::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_i001_signature');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeI001Signature::getSesPagCantidad(), EkuDeI001Signature::getSesPag());
$eku_de_i001_signatures = EkuDeI001Signature::getEkuDeI001SignaturesDesdeBackend($paginador, $criterio);

include 'eku_de_i001_signature_datos.php';
?>


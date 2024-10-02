<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeOpeEstado::setSesPag($pag);

$criterio = new Criterio(EkuDeOpeEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeOpeEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_ope_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeOpeEstado::getSesPagCantidad(), EkuDeOpeEstado::getSesPag());
$eku_de_ope_estados = EkuDeOpeEstado::getEkuDeOpeEstadosDesdeBackend($paginador, $criterio);

include 'eku_de_ope_estado_datos.php';
?>


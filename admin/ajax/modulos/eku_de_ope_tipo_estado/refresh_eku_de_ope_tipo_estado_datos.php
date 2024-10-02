<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeOpeTipoEstado::setSesPag($pag);

$criterio = new Criterio(EkuDeOpeTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeOpeTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_ope_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeOpeTipoEstado::getSesPagCantidad(), EkuDeOpeTipoEstado::getSesPag());
$eku_de_ope_tipo_estados = EkuDeOpeTipoEstado::getEkuDeOpeTipoEstadosDesdeBackend($paginador, $criterio);

include 'eku_de_ope_tipo_estado_datos.php';
?>


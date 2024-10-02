<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoEnviado::setSesPag($pag);

$criterio = new Criterio(InsInsumoEnviado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoEnviado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_enviado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoEnviado::getSesPagCantidad(), InsInsumoEnviado::getSesPag());
$ins_insumo_enviados = InsInsumoEnviado::getInsInsumoEnviadosDesdeBackend($paginador, $criterio);

include 'ins_insumo_enviado_datos.php';
?>


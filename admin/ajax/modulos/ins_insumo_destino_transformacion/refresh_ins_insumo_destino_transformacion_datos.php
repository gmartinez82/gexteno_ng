<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoDestinoTransformacion::setSesPag($pag);

$criterio = new Criterio(InsInsumoDestinoTransformacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoDestinoTransformacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_destino_transformacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoDestinoTransformacion::getSesPagCantidad(), InsInsumoDestinoTransformacion::getSesPag());
$ins_insumo_destino_transformacions = InsInsumoDestinoTransformacion::getInsInsumoDestinoTransformacionsDesdeBackend($paginador, $criterio);

include 'ins_insumo_destino_transformacion_datos.php';
?>


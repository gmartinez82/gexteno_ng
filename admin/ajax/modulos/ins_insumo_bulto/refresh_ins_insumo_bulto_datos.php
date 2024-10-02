<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoBulto::setSesPag($pag);

$criterio = new Criterio(InsInsumoBulto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoBulto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_bulto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoBulto::getSesPagCantidad(), InsInsumoBulto::getSesPag());
$ins_insumo_bultos = InsInsumoBulto::getInsInsumoBultosDesdeBackend($paginador, $criterio);

include 'ins_insumo_bulto_datos.php';
?>


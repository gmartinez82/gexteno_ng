<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OpeOperario::setSesPag($pag);

$criterio = new Criterio(OpeOperario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OpeOperario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ope_operario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OpeOperario::getSesPagCantidad(), OpeOperario::getSesPag());
$ope_operarios = OpeOperario::getOpeOperariosDesdeBackend($paginador, $criterio);

include 'ope_operario_datos.php';
?>


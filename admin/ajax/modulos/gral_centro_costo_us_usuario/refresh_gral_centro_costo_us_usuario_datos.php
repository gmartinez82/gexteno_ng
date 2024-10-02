<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralCentroCostoUsUsuario::setSesPag($pag);

$criterio = new Criterio(GralCentroCostoUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCentroCostoUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_centro_costo_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralCentroCostoUsUsuario::getSesPagCantidad(), GralCentroCostoUsUsuario::getSesPag());
$gral_centro_costo_us_usuarios = GralCentroCostoUsUsuario::getGralCentroCostoUsUsuariosDesdeBackend($paginador, $criterio);

include 'gral_centro_costo_us_usuario_datos.php';
?>


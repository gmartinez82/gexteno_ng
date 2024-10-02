<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajeroUsUsuario::setSesPag($pag);

$criterio = new Criterio(FndCajeroUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajeroUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_cajero_us_usuario');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajeroUsUsuario::getSesPagCantidad(), FndCajeroUsUsuario::getSesPag());
$fnd_cajero_us_usuarios = FndCajeroUsUsuario::getFndCajeroUsUsuariosDesdeBackend($paginador, $criterio);

include 'fnd_cajero_us_usuario_datos.php';
?>


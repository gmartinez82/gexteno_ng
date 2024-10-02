<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvTelefono::setSesPag($pag);

$criterio = new Criterio(PrvTelefono::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvTelefono::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_telefono');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvTelefono::getSesPagCantidad(), PrvTelefono::getSesPag());
$prv_telefonos = PrvTelefono::getPrvTelefonosDesdeBackend($paginador, $criterio);

include 'prv_telefono_datos.php';
?>


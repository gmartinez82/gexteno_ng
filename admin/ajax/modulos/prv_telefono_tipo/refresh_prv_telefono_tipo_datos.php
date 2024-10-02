<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvTelefonoTipo::setSesPag($pag);

$criterio = new Criterio(PrvTelefonoTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvTelefonoTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_telefono_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvTelefonoTipo::getSesPagCantidad(), PrvTelefonoTipo::getSesPag());
$prv_telefono_tipos = PrvTelefonoTipo::getPrvTelefonoTiposDesdeBackend($paginador, $criterio);

include 'prv_telefono_tipo_datos.php';
?>


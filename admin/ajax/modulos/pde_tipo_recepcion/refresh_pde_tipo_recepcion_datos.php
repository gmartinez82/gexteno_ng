<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoRecepcion::setSesPag($pag);

$criterio = new Criterio(PdeTipoRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_recepcion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoRecepcion::getSesPagCantidad(), PdeTipoRecepcion::getSesPag());
$pde_tipo_recepcions = PdeTipoRecepcion::getPdeTipoRecepcionsDesdeBackend($paginador, $criterio);

include 'pde_tipo_recepcion_datos.php';
?>


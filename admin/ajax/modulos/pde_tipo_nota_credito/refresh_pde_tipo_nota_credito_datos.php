<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoNotaCredito::setSesPag($pag);

$criterio = new Criterio(PdeTipoNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoNotaCredito::getSesPagCantidad(), PdeTipoNotaCredito::getSesPag());
$pde_tipo_nota_creditos = PdeTipoNotaCredito::getPdeTipoNotaCreditosDesdeBackend($paginador, $criterio);

include 'pde_tipo_nota_credito_datos.php';
?>


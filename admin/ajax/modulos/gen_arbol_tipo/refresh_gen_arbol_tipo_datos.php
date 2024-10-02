<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GenArbolTipo::setSesPag($pag);

$criterio = new Criterio(GenArbolTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenArbolTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gen_arbol_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GenArbolTipo::getSesPagCantidad(), GenArbolTipo::getSesPag());
$gen_arbol_tipos = GenArbolTipo::getGenArbolTiposDesdeBackend($paginador, $criterio);

include 'gen_arbol_tipo_datos.php';
?>


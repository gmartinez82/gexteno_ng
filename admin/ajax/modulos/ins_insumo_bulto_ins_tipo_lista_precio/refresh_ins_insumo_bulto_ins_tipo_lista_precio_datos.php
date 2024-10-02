<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
InsInsumoBultoInsTipoListaPrecio::setSesPag($pag);

$criterio = new Criterio(InsInsumoBultoInsTipoListaPrecio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsInsumoBultoInsTipoListaPrecio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ins_insumo_bulto_ins_tipo_lista_precio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumoBultoInsTipoListaPrecio::getSesPagCantidad(), InsInsumoBultoInsTipoListaPrecio::getSesPag());
$ins_insumo_bulto_ins_tipo_lista_precios = InsInsumoBultoInsTipoListaPrecio::getInsInsumoBultoInsTipoListaPreciosDesdeBackend($paginador, $criterio);

include 'ins_insumo_bulto_ins_tipo_lista_precio_datos.php';
?>


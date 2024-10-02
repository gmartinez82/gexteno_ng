<?php
include_once "_autoload.php";

$pag = Gral::getVars(2, "pag", 1);
PrvInsumo::setSesPag($pag);

$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
$criterio->addTabla("prv_insumo");
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvInsumo::getSesPagCantidad(), PrvInsumo::getSesPag());
$prv_insumos = PrvInsumo::getPrvInsumos($paginador, $criterio);

include "prv_insumo_gestion_datos.php";

?>
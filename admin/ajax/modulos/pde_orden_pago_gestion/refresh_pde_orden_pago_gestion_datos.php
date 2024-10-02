<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
PdeOrdenPago::setSesPag($pag);

$criterio = new Criterio(PdeOrdenPago::SES_CRITERIOS);
$criterio->addTabla('pde_orden_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOrdenPago::getSesPagCantidad(), PdeOrdenPago::getSesPag());
$pde_orden_pagos = PdeOrdenPago::getPdeOrdenPagos($paginador, $criterio);

include 'pde_orden_pago_gestion_datos.php';
?>
<script>
    setInit();
    setInitPdeOrdenPagoGestion();
</script>

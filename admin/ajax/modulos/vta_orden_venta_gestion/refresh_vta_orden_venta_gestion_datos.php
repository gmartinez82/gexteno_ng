<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVenta::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVenta::getSesPagCantidad(), VtaOrdenVenta::getSesPag());
$vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentasDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_gestion_datos.php';
?>
<script>
    setInit();
    setInitVtaOrdenVentaGestion();
</script>

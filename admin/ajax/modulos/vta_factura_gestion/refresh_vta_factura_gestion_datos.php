<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaFactura::setSesPag($pag);

$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFactura::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VtaFactura::GEN_TABLA);
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFactura::getSesPagCantidad(), VtaFactura::getSesPag());
$vta_facturas = VtaFactura::getVtaFacturas($paginador, $criterio);

include 'vta_factura_gestion_datos.php';
?>
<script>
    setInit();
    setInitVtaFacturaGestion();
</script>

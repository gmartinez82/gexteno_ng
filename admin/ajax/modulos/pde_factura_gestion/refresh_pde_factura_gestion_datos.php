<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
PdeFactura::setSesPag($pag);

$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
$criterio->addTabla('pde_factura');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFactura::getSesPagCantidad(), PdeFactura::getSesPag());
$pde_facturas = PdeFactura::getPdeFacturas($paginador, $criterio);

include 'pde_factura_gestion_datos.php';
?>
<script>
    setInit();
    setInitPdeFacturaGestion();
</script>

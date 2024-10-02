<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaVendedorDescuento::setSesPag($pag);

$criterio = new Criterio(VtaVendedorDescuento::SES_CRITERIOS);
$criterio->addTabla('vta_vendedor_descuento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaVendedorDescuento::getSesPagCantidad(), VtaVendedorDescuento::getSesPag());
$vta_vendedor_descuentos = VtaVendedorDescuento::getVtaVendedorDescuentos($paginador, $criterio);

include 'vta_vendedor_descuento_gestion_datos.php';
?>

<script>
    setInit();
    setInitVtaVendedorDescuentoGestion();
</script>
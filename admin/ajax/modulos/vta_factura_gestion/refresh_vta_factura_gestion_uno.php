<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_factura = VtaFactura::getOxId($id);

$estado = ($vta_factura->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_factura_gestion_uno.php';
?>

<script>
    setInit();
    setInitVtaFacturaGestion();
</script>
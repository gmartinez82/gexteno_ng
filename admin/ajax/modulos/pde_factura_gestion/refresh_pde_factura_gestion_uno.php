<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$pde_factura = PdeFactura::getOxId($id);

$estado = ($pde_factura->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_factura_gestion_uno.php';
?>

<script>
    setInit();
    setInitPdeFacturaGestion();
</script>
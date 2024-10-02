<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$pde_orden_pago = PdeOrdenPago::getOxId($id);

$estado = ($pde_orden_pago->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_orden_pago_gestion_uno.php';
?>

<script>
    setInit();
    setInitPdeOrdenPagoGestion();
</script>
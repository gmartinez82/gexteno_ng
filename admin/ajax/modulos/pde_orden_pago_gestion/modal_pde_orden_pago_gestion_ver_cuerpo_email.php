<?php
include "_autoload.php";

$pde_orden_pago_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_enviado_id', 0);
$pde_orden_pago_enviado = PdeOrdenPagoEnviado::getOxId($pde_orden_pago_enviado_id);

$pde_orden_pago = $pde_orden_pago_enviado->getPdeOrdenPago();

$contenido_html = $pde_orden_pago_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitPdeOrdenPagoGestion();
</script>
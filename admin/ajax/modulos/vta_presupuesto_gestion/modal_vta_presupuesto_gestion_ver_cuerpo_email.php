<?php
include "_autoload.php";

$vta_presupuesto_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_enviado_id', 0);
$vta_presupuesto_enviado = VtaPresupuestoEnviado::getOxId($vta_presupuesto_enviado_id);

$vta_presupuesto = $vta_presupuesto_enviado->getVtaPresupuesto();

$contenido_html = $vta_presupuesto_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitVtaPresupuestoGestion();
</script>
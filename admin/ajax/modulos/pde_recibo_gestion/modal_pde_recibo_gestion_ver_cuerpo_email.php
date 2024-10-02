<?php
include "_autoload.php";

$pde_recibo_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_recibo_enviado_id', 0);
$pde_recibo_enviado = PdeReciboEnviado::getOxId($pde_recibo_enviado_id);

$pde_recibo = $pde_recibo_enviado->getPdeRecibo();

$contenido_html = $pde_recibo_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitPdeReciboGestion();
</script>
<?php
include "_autoload.php";

$vta_recibo_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_recibo_enviado_id', 0);
$vta_recibo_enviado = VtaReciboEnviado::getOxId($vta_recibo_enviado_id);

$vta_recibo = $vta_recibo_enviado->getVtaRecibo();

$contenido_html = $vta_recibo_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitVtaReciboGestion();
</script>
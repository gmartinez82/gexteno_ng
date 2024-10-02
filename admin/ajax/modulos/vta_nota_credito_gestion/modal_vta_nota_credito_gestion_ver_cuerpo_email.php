<?php
include "_autoload.php";

$vta_nota_credito_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_credito_enviado_id', 0);
$vta_nota_credito_enviado = VtaNotaCreditoEnviado::getOxId($vta_nota_credito_enviado_id);

$vta_nota_credito = $vta_nota_credito_enviado->getVtaNotaCredito();

$contenido_html = $vta_nota_credito_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitVtaNotaCreditoGestion();
</script>
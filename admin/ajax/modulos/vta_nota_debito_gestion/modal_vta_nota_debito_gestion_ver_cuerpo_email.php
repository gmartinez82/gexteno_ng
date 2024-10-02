<?php
include "_autoload.php";

$vta_nota_debito_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_debito_enviado_id', 0);
$vta_nota_debito_enviado = VtaNotaDebitoEnviado::getOxId($vta_nota_debito_enviado_id);

$vta_nota_debito = $vta_nota_debito_enviado->getVtaNotaDebito();

$contenido_html = $vta_nota_debito_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitVtaNotaDebitoGestion();
</script>
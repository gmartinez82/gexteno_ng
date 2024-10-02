<?php
include "_autoload.php";

$pde_nota_credito_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_nota_credito_enviado_id', 0);
$pde_nota_credito_enviado = PdeNotaCreditoEnviado::getOxId($pde_nota_credito_enviado_id);

$pde_nota_credito = $pde_nota_credito_enviado->getPdeNotaCredito();

$contenido_html = $pde_nota_credito_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitPdeNotaCreditoGestion();
</script>
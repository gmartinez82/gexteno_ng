<?php
include "_autoload.php";

$pde_nota_debito_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_nota_debito_enviado_id', 0);
$pde_nota_debito_enviado = PdeNotaDebitoEnviado::getOxId($pde_nota_debito_enviado_id);

$pde_nota_debito = $pde_nota_debito_enviado->getPdeNotaDebito();

$contenido_html = $pde_nota_debito_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitPdeNotaDebitoGestion();
</script>
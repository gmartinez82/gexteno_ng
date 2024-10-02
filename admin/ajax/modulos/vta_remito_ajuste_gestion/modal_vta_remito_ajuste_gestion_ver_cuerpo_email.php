<?php
include "_autoload.php";

$vta_remito_ajuste_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_enviado_id', 0);
$vta_remito_ajuste_enviado = VtaRemitoAjusteEnviado::getOxId($vta_remito_ajuste_enviado_id);

$vta_remito_ajuste = $vta_remito_ajuste_enviado->getVtaRemitoAjuste();

$contenido_html = $vta_remito_ajuste_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitVtaRemitoAjusteGestion();
</script>
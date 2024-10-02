<?php
include "_autoload.php";

$vta_remito_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_enviado_id', 0);
$vta_remito_enviado = VtaRemitoEnviado::getOxId($vta_remito_enviado_id);

$vta_remito = $vta_remito_enviado->getVtaRemito();

$contenido_html = $vta_remito_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitVtaRemitoGestion();
</script>
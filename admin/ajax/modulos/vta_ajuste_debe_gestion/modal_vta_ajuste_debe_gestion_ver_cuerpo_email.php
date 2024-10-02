<?php
include "_autoload.php";

$vta_ajuste_debe_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_debe_enviado_id', 0);
$vta_ajuste_debe_enviado = VtaAjusteDebeEnviado::getOxId($vta_ajuste_debe_enviado_id);

$vta_ajuste_debe = $vta_ajuste_debe_enviado->getVtaAjusteDebe();

$contenido_html = $vta_ajuste_debe_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitVtaAjusteDebeGestion();
</script>
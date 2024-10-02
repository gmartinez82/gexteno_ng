<?php
include "_autoload.php";

$vta_ajuste_haber_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_haber_enviado_id', 0);
$vta_ajuste_haber_enviado = VtaAjusteHaberEnviado::getOxId($vta_ajuste_haber_enviado_id);

$vta_ajuste_haber = $vta_ajuste_haber_enviado->getVtaAjusteHaber();

$contenido_html = $vta_ajuste_haber_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitVtaAjusteHaberGestion();
</script>
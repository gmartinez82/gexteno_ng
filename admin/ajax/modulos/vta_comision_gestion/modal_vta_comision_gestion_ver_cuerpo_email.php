<?php
include "_autoload.php";

$vta_comision_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_comision_enviado_id', 0);
$vta_comision_enviado = VtaComisionEnviado::getOxId($vta_comision_enviado_id);

$vta_comision = $vta_comision_enviado->getVtaComision();

$contenido_html = $vta_comision_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitVtaComisionGestion();
</script>
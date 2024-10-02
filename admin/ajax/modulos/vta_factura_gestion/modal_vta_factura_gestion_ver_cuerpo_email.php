<?php
include "_autoload.php";

$vta_factura_enviado_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_enviado_id', 0);
$vta_factura_enviado = VtaFacturaEnviado::getOxId($vta_factura_enviado_id);

$vta_factura = $vta_factura_enviado->getVtaFactura();

$contenido_html = $vta_factura_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitVtaFacturaGestion();
</script>
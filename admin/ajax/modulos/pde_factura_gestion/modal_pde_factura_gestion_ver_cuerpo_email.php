<?php
include "_autoload.php";

$pde_factura_enviado_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_enviado_id', 0);
$pde_factura_enviado = PdeFacturaEnviado::getOxId($pde_factura_enviado_id);

$pde_factura = $pde_factura_enviado->getPdeFactura();

$contenido_html = $pde_factura_enviado->getCuerpo();

echo stripslashes($contenido_html);
?>
<script>
    setInit();
    setInitPdeFacturaGestion();
</script>
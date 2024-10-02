<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_recibo = VtaRecibo::getOxId($id);

$estado = ($vta_recibo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_recibo_gestion_uno.php';
?>
<script>
    setInit();
    setInitVtaReciboGestion();
</script>

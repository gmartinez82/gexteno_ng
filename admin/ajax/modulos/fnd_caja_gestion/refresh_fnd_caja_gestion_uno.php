<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$fnd_caja = FndCaja::getOxId($id);

$estado = ($fnd_caja->getEstado()) ? 'habilitado' : 'deshabilitado';

include 'fnd_caja_gestion_uno.php';
?>
<script>
    setInitFndCaja();
    setInit();
</script>

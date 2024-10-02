<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$pde_recibo = PdeRecibo::getOxId($id);

$estado = ($pde_recibo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_recibo_gestion_uno.php';
?>
<script>
    setInit();
    setInitPdeReciboGestion();
</script>

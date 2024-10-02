<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$cntb_diario_asiento = CntbDiarioAsiento::getOxId($id);

$estado = ($cntb_diario_asiento->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cntb_diario_asiento_gestion_uno.php';
?>
<script>
    setInitCntbDiarioAsientoGestion();
    setInit();
</script>
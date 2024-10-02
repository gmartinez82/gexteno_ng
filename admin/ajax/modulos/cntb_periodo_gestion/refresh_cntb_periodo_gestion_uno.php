<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$cntb_periodo = CntbPeriodo::getOxId($id);

$estado = ($cntb_periodo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cntb_periodo_gestion_uno.php';
?>

<script>
    setInitCntbPeriodoGestion();
    setInit();
</script>
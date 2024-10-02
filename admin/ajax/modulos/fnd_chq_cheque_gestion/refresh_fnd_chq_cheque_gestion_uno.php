<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$fnd_chq_cheque = FndChqCheque::getOxId($id);

$estado = ($fnd_chq_cheque->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'fnd_chq_cheque_gestion_uno.php';
?>

<script>
    setInit();
    setInitFndChqChequeGestion();
</script>

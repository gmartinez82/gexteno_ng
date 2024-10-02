<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_nota_credito = VtaNotaCredito::getOxId($id);

$estado = ($vta_nota_credito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_nota_credito_gestion_uno.php';
?>

<script>
    setInit();
    setInitVtaNotaCreditoGestion();
</script>
<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$pde_nota_credito = PdeNotaCredito::getOxId($id);

$estado = ($pde_nota_credito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_nota_credito_gestion_uno.php';
?>

<script>
    setInit();
    setInitPdeNotaCreditoGestion();
</script>
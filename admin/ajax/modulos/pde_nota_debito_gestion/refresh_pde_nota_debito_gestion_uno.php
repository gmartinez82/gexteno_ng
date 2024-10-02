<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$pde_nota_debito = PdeNotaDebito::getOxId($id);

$estado = ($pde_nota_debito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_nota_debito_gestion_uno.php';
?>

<script>
    setInit();
    setInitPdeNotaDebitoGestion();
</script>
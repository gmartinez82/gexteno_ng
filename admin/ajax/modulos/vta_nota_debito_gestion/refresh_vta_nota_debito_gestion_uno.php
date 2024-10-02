<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_nota_debito = VtaNotaDebito::getOxId($id);

$estado = ($vta_nota_debito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_nota_debito_gestion_uno.php';
?>

<script>
    setInit();
    setInitVtaNotaDebitoGestion();
</script>
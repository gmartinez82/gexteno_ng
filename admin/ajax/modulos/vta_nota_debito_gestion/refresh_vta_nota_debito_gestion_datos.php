<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaDebito::setSesPag($pag);

$criterio = new Criterio(VtaNotaDebito::SES_CRITERIOS);
$criterio->addTabla('vta_nota_debito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaDebito::getSesPagCantidad(), VtaNotaDebito::getSesPag());
$vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitos($paginador, $criterio);

include 'vta_nota_debito_gestion_datos.php';
?>
<script>
    setInit();
    setInitVtaNotaDebitoGestion();
</script>

<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCredito::setSesPag($pag);

$criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);
$criterio->addTabla('vta_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCredito::getSesPagCantidad(), VtaNotaCredito::getSesPag());
$vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditos($paginador, $criterio);

include 'vta_nota_credito_gestion_datos.php';
?>
<script>
    setInit();
    setInitVtaNotaCreditoGestion();
</script>

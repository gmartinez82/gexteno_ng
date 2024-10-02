<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaRemito::setSesPag($pag);

$criterio = new Criterio(VtaRemito::SES_CRITERIOS);
$criterio->addTabla('vta_remito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaRemito::getSesPagCantidad(), VtaRemito::getSesPag());
$vta_remitos = VtaRemito::getVtaRemitos($paginador, $criterio);

include 'vta_remito_gestion_datos.php';
?>

<script>
    setInit();
    setInitVtaRemitoGestion();
</script>
<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaRemitoAjuste::setSesPag($pag);

$criterio = new Criterio(VtaRemitoAjuste::SES_CRITERIOS);
$criterio->addTabla('vta_remito_ajuste');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaRemitoAjuste::getSesPagCantidad(), VtaRemitoAjuste::getSesPag());
$vta_remito_ajustes = VtaRemitoAjuste::getVtaRemitoAjustes($paginador, $criterio);

include 'vta_remito_ajuste_gestion_datos.php';
?>

<script>
    setInit();
    setInitVtaRemitoAjusteGestion();
</script>
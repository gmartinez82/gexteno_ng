<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaAjusteDebe::setSesPag($pag);

$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
$criterio->addTabla('vta_ajuste_debe');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaAjusteDebe::getSesPagCantidad(), VtaAjusteDebe::getSesPag());
$vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebesDesdeBackend($paginador, $criterio);

include 'vta_ajuste_debe_gestion_datos.php';
?>
<script>
    setInit();
    setInitVtaAjusteDebeGestion();
</script>

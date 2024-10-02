<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaAjusteHaber::setSesPag($pag);

$criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);
$criterio->addTabla('vta_ajuste_haber');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaAjusteHaber::getSesPagCantidad(), VtaAjusteHaber::getSesPag());
$vta_ajuste_habers = VtaAjusteHaber::getVtaAjusteHabers($paginador, $criterio);

include 'vta_ajuste_haber_gestion_datos.php';
?>
<script>
    setInit();
    setInitVtaAjusteHaberGestion();
</script>

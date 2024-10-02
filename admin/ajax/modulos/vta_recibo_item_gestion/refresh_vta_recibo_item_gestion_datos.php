<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboItem::setSesPag($pag);

$criterio = new Criterio(VtaReciboItem::SES_CRITERIOS);
$criterio->addTabla('vta_recibo_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboItem::getSesPagCantidad(), VtaReciboItem::getSesPag());
$vta_recibo_items = VtaReciboItem::getVtaReciboItemsDesdeBackend($paginador, $criterio);

include 'vta_recibo_item_gestion_datos.php';
?>
<script>
    setInit();
    setInitVtaReciboItemGestion();
</script>

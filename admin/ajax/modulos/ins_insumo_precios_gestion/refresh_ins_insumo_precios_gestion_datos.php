<?php
set_time_limit(5);
ini_set('memory_limit', '10M');

include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
InsInsumo::setSesPag($pag);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla('ins_insumo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(InsInsumo::getSesPagCantidad(), InsInsumo::getSesPag());
$ins_insumos = InsInsumo::getInsInsumos($paginador, $criterio);

$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, null, true);

include 'ins_insumo_precios_gestion_datos.php';
?>
<script>
    setInitInsInsumoPreciosGestion();
    setInit();
</script>
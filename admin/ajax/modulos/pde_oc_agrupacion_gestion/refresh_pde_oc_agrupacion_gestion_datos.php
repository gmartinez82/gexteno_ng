<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$pag = Gral::getVars(2, 'pag', 1);
PdeOcAgrupacion::setSesPag($pag);

// se inicializan los centros de pedido que el usuario puede gestionar
$string_centro_pedido_ids = PdeCentroPedido::getArrayPdeCentroPedidoIdsXCredencialParaComparadorIn();

/*
$criterio = new Criterio(PdeOcAgrupacion::SES_CRITERIOS);
$criterio->addDistinct(true);
//if(!$user->getAbsoluto()){
    $criterio->add('pde_oc_agrupacion_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
    $criterio->add('pde_oc_agrupacion_destinatario.estado', 1, Criterio::IGUAL);
//}
$criterio->addTabla('pde_oc_agrupacion');
$criterio->addRealJoin('pde_oc_agrupacion_estado', 'pde_oc_agrupacion_estado.pde_oc_agrupacion_id', 'pde_oc_agrupacion.id');
$criterio->addRealJoin('pde_oc_agrupacion_destinatario', 'pde_oc_agrupacion_destinatario.pde_oc_agrupacion_id', 'pde_oc_agrupacion.id');
$criterio->setCriteriosInicial();
*/
$criterio = new Criterio(PdeOcAgrupacion::SES_CRITERIOS);
$criterio->addDistinct(true);
/*
if(!$user->getAbsoluto()){
	$criterio->add('pde_oc_agrupacion_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
	$criterio->add('pde_oc_agrupacion_destinatario.estado', 1, Criterio::IGUAL);
}
*/
//$criterio->add('pde_oc_agrupacion.pde_centro_pedido_id', $string_centro_pedido_ids, Criterio::IN);
$criterio->addTabla('pde_oc_agrupacion');
$criterio->addRealJoin('pde_oc_agrupacion_estado', 'pde_oc_agrupacion_estado.pde_oc_agrupacion_id', 'pde_oc_agrupacion.id');
$criterio->addRealJoin('pde_oc_agrupacion_destinatario', 'pde_oc_agrupacion_destinatario.pde_oc_agrupacion_id', 'pde_oc_agrupacion.id');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcAgrupacion::getSesPagCantidad(), PdeOcAgrupacion::getSesPag());
$pde_oc_agrupacions = PdeOcAgrupacion::getPdeOcAgrupacions($paginador, $criterio);

include 'pde_oc_agrupacion_gestion_datos.php';
?>
<script>
setInitPdeOcAgrupacions();
</script>

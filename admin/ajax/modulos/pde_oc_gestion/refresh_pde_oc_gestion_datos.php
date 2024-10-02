<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$pag = Gral::getVars(2, 'pag', 1);
PdeOc::setSesPag($pag);

// se inicializan los centros de pedido que el usuario puede gestionar
$string_centro_pedido_ids = PdeCentroPedido::getArrayPdeCentroPedidoIdsXCredencialParaComparadorIn();

/*
$criterio = new Criterio(PdeOc::SES_CRITERIOS);
$criterio->addDistinct(true);
//if(!$user->getAbsoluto()){
    $criterio->add('pde_oc_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
    $criterio->add('pde_oc_destinatario.estado', 1, Criterio::IGUAL);
//}
$criterio->addTabla('pde_oc');
$criterio->addRealJoin('pde_oc_estado', 'pde_oc_estado.pde_oc_id', 'pde_oc.id');
$criterio->addRealJoin('pde_oc_destinatario', 'pde_oc_destinatario.pde_oc_id', 'pde_oc.id');
$criterio->setCriteriosInicial();
*/
$criterio = new Criterio(PdeOc::SES_CRITERIOS);
$criterio->addDistinct(true);
/*
if(!$user->getAbsoluto()){
	$criterio->add('pde_oc_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
	$criterio->add('pde_oc_destinatario.estado', 1, Criterio::IGUAL);
}
*/
//$criterio->add('pde_oc.pde_centro_pedido_id', $string_centro_pedido_ids, Criterio::IN);
$criterio->addTabla('pde_oc');
$criterio->addRealJoin('pde_oc_estado', 'pde_oc_estado.pde_oc_id', 'pde_oc.id');
$criterio->addRealJoin('pde_oc_destinatario', 'pde_oc_destinatario.pde_oc_id', 'pde_oc.id', 'LEFT JOIN');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOc::getSesPagCantidad(), PdeOc::getSesPag());
$pde_ocs = PdeOc::getPdeOcs($paginador, $criterio);

include 'pde_oc_gestion_datos.php';
?>
<script>
setInitPdeOcs();
</script>

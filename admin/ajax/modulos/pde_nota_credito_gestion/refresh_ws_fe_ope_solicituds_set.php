<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->getPdeNotaCreditoWsFeOpeSolicitudsId();');


// elementos seleccionados
$c = new Criterio();
$c->add('pde_nota_credito_ws_fe_ope_solicitud.pde_nota_credito_id', $padre_id, Criterio::IGUAL);
$c->addTabla('ws_fe_ope_solicitud');
$c->addRealJoin('pde_nota_credito_ws_fe_ope_solicitud', 'pde_nota_credito_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'ws_fe_ope_solicitud.id', 'LEFT JOIN');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$ws_fe_ope_solicituds = WsFeOpeSolicitud::getWsFeOpeSolicituds(null, $c);
?>
	<div class='subtitulo seleccionados' ><?php Lang::_lang('WsFeOpeSolicituds') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($ws_fe_ope_solicituds) > 0){
foreach($ws_fe_ope_solicituds as $ws_fe_ope_solicitud){
	$cont++;
	$coma = '';
	if($cont > 1) $coma = ',';
	$ids_seleccionados.= $coma.$ws_fe_ope_solicitud->getId();
	?>
	<div id='uno_ws_fe_ope_solicitud_<?php echo $ws_fe_ope_solicitud->getId() ?>' >
	<?php
	include 'uno_ws_fe_ope_solicitud_set.php';
	?>
	</div>
	<?php
}
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('WsFeOpeSolicituds') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}


// elementos NO seleccionados
$c = new Criterio();



if($ids_seleccionados != ''){
	$c->addInicioSubconsulta();
	$c->add('id', '('.$ids_seleccionados.')', Criterio::NOTIN, false, '');
	$c->addFinSubconsulta();

	$c->addInicioSubconsulta();
	$c->add('id', '%'.$palabra.'%', Criterio::LIKE);

	$c->add('descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->addFinSubconsulta();
}else{
	$c->add('id', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);

	$c->add('descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
}


$c->addTabla('ws_fe_ope_solicitud');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$paginador = new Paginador(10, $pagina);

$ws_fe_ope_solicituds = WsFeOpeSolicitud::getWsFeOpeSolicituds($paginador, $c);

?>
	<div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('WsFeOpeSolicituds') ?></div>
<?php
if(count($ws_fe_ope_solicituds) > 0){
foreach($ws_fe_ope_solicituds as $ws_fe_ope_solicitud){
	?>
	<div id='uno_ws_fe_ope_solicitud_<?php echo $ws_fe_ope_solicitud->getId() ?>' >
	<?php
	include 'uno_ws_fe_ope_solicitud_set.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('WsFeOpeSolicituds') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

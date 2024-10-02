<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->getInsInsumoVehModelosId();');


// elementos seleccionados
$c = new Criterio();
$c->add('ins_insumo_veh_modelo.ins_insumo_id', $padre_id, Criterio::IGUAL);
$c->addTabla('veh_modelo');
$c->addRealJoin('ins_insumo_veh_modelo', 'ins_insumo_veh_modelo.veh_modelo_id', 'veh_modelo.id', 'LEFT JOIN');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$veh_modelos = VehModelo::getVehModelos(null, $c);
?>
	<div class='subtitulo seleccionados' ><?php Lang::_lang('VehModelos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($veh_modelos) > 0){
foreach($veh_modelos as $veh_modelo){
	$cont++;
	$coma = '';
	if($cont > 1) $coma = ',';
	$ids_seleccionados.= $coma.$veh_modelo->getId();
	?>
	<div id='uno_veh_modelo_<?php echo $veh_modelo->getId() ?>' >
	<?php
	include 'uno_veh_modelo_set.php';
	?>
	</div>
	<?php
}
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('VehModelos') ?> <?php Lang::_lang('Seleccionados') ?></div>
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
	$c->add('codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->addFinSubconsulta();
}else{
	$c->add('id', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);

	$c->add('descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
}


$c->addTabla('veh_modelo');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$paginador = new Paginador(10, $pagina);

$veh_modelos = VehModelo::getVehModelos($paginador, $c);

?>
	<div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('VehModelos') ?></div>
<?php
if(count($veh_modelos) > 0){
foreach($veh_modelos as $veh_modelo){
	?>
	<div id='uno_veh_modelo_<?php echo $veh_modelo->getId() ?>' >
	<?php
	include 'uno_veh_modelo_set.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('VehModelos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->getInsMatrizsId();');


// elementos seleccionados
$c = new Criterio();
$c->add('ins_matriz.ins_marca_id', $padre_id, Criterio::IGUAL);
$c->addTabla('ins_matriz');
$c->addRealJoin('ins_matriz', 'ins_matriz.ins_matriz_id', 'ins_matriz.id', 'LEFT JOIN');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$ins_matrizs = InsMatriz::getInsMatrizs(null, $c);
?>
	<div class='subtitulo seleccionados' ><?php Lang::_lang('InsMatrizs') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($ins_matrizs) > 0){
foreach($ins_matrizs as $ins_matriz){
	$cont++;
	$coma = '';
	if($cont > 1) $coma = ',';
	$ids_seleccionados.= $coma.$ins_matriz->getId();
	?>
	<div id='uno_ins_matriz_<?php echo $ins_matriz->getId() ?>' >
	<?php
	include 'uno_ins_matriz_set.php';
	?>
	</div>
	<?php
}
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('InsMatrizs') ?> <?php Lang::_lang('Seleccionados') ?></div>
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


$c->addTabla('ins_matriz');
$c->addOrden('2');
$c->setCriterios();

$paginador = new Paginador(10, $pagina);

$ins_matrizs = InsMatriz::getInsMatrizs($paginador, $c);

?>
	<div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('InsMatrizs') ?></div>
<?php
if(count($ins_matrizs) > 0){
foreach($ins_matrizs as $ins_matriz){
	?>
	<div id='uno_ins_matriz_<?php echo $ins_matriz->getId() ?>' >
	<?php
	include 'uno_ins_matriz_set.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('InsMatrizs') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

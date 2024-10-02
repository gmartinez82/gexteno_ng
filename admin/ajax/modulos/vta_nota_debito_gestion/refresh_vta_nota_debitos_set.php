<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->getVtaNotaDebitoVtaNotaDebitosId();');


// elementos seleccionados
$c = new Criterio();
$c->add('vta_nota_debito_vta_nota_debito.vta_nota_debito_id', $padre_id, Criterio::IGUAL);
$c->addTabla('vta_nota_debito');
$c->addRealJoin('vta_nota_debito_vta_nota_debito', 'vta_nota_debito_vta_nota_debito.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitos(null, $c);
?>
	<div class='subtitulo seleccionados' ><?php Lang::_lang('VtaNotaDebitos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($vta_nota_debitos) > 0){
foreach($vta_nota_debitos as $vta_nota_debito){
	$cont++;
	$coma = '';
	if($cont > 1) $coma = ',';
	$ids_seleccionados.= $coma.$vta_nota_debito->getId();
	?>
	<div id='uno_vta_nota_debito_<?php echo $vta_nota_debito->getId() ?>' >
	<?php
	include 'uno_vta_nota_debito_set.php';
	?>
	</div>
	<?php
}
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('VtaNotaDebitos') ?> <?php Lang::_lang('Seleccionados') ?></div>
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


$c->addTabla('vta_nota_debito');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$paginador = new Paginador(10, $pagina);

$vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitos($paginador, $c);

?>
	<div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('VtaNotaDebitos') ?></div>
<?php
if(count($vta_nota_debitos) > 0){
foreach($vta_nota_debitos as $vta_nota_debito){
	?>
	<div id='uno_vta_nota_debito_<?php echo $vta_nota_debito->getId() ?>' >
	<?php
	include 'uno_vta_nota_debito_set.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('VtaNotaDebitos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

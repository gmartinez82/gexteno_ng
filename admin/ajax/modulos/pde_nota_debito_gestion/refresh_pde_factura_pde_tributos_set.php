<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->getPdeNotaDebitoPdeFacturaPdeTributosId();');


// elementos seleccionados
$c = new Criterio();
$c->add('pde_nota_debito_pde_factura_pde_tributo.pde_nota_debito_id', $padre_id, Criterio::IGUAL);
$c->addTabla('pde_factura_pde_tributo');
$c->addRealJoin('pde_nota_debito_pde_factura_pde_tributo', 'pde_nota_debito_pde_factura_pde_tributo.pde_factura_pde_tributo_id', 'pde_factura_pde_tributo.id', 'LEFT JOIN');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$pde_factura_pde_tributos = PdeFacturaPdeTributo::getPdeFacturaPdeTributos(null, $c);
?>
	<div class='subtitulo seleccionados' ><?php Lang::_lang('PdeFacturaPdeTributos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($pde_factura_pde_tributos) > 0){
foreach($pde_factura_pde_tributos as $pde_factura_pde_tributo){
	$cont++;
	$coma = '';
	if($cont > 1) $coma = ',';
	$ids_seleccionados.= $coma.$pde_factura_pde_tributo->getId();
	?>
	<div id='uno_pde_factura_pde_tributo_<?php echo $pde_factura_pde_tributo->getId() ?>' >
	<?php
	include 'uno_pde_factura_pde_tributo_set.php';
	?>
	</div>
	<?php
}
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('PdeFacturaPdeTributos') ?> <?php Lang::_lang('Seleccionados') ?></div>
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


$c->addTabla('pde_factura_pde_tributo');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$paginador = new Paginador(10, $pagina);

$pde_factura_pde_tributos = PdeFacturaPdeTributo::getPdeFacturaPdeTributos($paginador, $c);

?>
	<div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('PdeFacturaPdeTributos') ?></div>
<?php
if(count($pde_factura_pde_tributos) > 0){
foreach($pde_factura_pde_tributos as $pde_factura_pde_tributo){
	?>
	<div id='uno_pde_factura_pde_tributo_<?php echo $pde_factura_pde_tributo->getId() ?>' >
	<?php
	include 'uno_pde_factura_pde_tributo_set.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('PdeFacturaPdeTributos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

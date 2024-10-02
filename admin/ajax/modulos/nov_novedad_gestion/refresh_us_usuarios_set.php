<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->getNovNovedadDestinatariosId();');


// elementos seleccionados
$c = new Criterio();
$c->add('nov_novedad_destinatario.nov_novedad_id', $padre_id, Criterio::IGUAL);
$c->addTabla('us_usuario');
$c->addRealJoin('nov_novedad_destinatario', 'nov_novedad_destinatario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$us_usuarios = UsUsuario::getUsUsuarios(null, $c);
?>
	<div class='subtitulo seleccionados' ><?php Lang::_lang('UsUsuarios') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($us_usuarios) > 0){
foreach($us_usuarios as $us_usuario){
	$cont++;
	$coma = '';
	if($cont > 1) $coma = ',';
	$ids_seleccionados.= $coma.$us_usuario->getId();
	?>
	<div id='uno_us_usuario_<?php echo $us_usuario->getId() ?>' >
	<?php
	include 'uno_us_usuario_set.php';
	?>
	</div>
	<?php
}
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('UsUsuarios') ?> <?php Lang::_lang('Seleccionados') ?></div>
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

	$c->add('apellido', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('nombre', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->addFinSubconsulta();
}else{
	$c->add('id', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);

	$c->add('apellido', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('nombre', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
	$c->add('observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
}


$c->addTabla('us_usuario');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$paginador = new Paginador(10, $pagina);

$us_usuarios = UsUsuario::getUsUsuarios($paginador, $c);

?>
	<div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('UsUsuarios') ?></div>
<?php
if(count($us_usuarios) > 0){
foreach($us_usuarios as $us_usuario){
	?>
	<div id='uno_us_usuario_<?php echo $us_usuario->getId() ?>' >
	<?php
	include 'uno_us_usuario_set.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
}else{
?>
	<div class='comentario' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('UsUsuarios') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

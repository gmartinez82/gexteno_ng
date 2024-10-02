<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->getPrvProveedorUsUsuariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = UsUsuario::setAplicarFiltrosDeAlcance($c);
$c->add('prv_proveedor_us_usuario.prv_proveedor_id', $padre_id, Criterio::IGUAL);
$c->addTabla('us_usuario');
$c->addRealJoin('prv_proveedor_us_usuario', 'prv_proveedor_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');

$c->addOrden('us_usuario.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$us_usuarios_relacionados = UsUsuario::getUsUsuarios(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('UsUsuarios') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($us_usuarios_relacionados) > 0){
    foreach($us_usuarios_relacionados as $us_usuario_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$us_usuario_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_us_usuario_<?php echo $us_usuario_relacionado->getId() ?>' >
            <?php
            include 'uno_us_usuario_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('UsUsuarios') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = UsUsuario::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('us_usuario.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('us_usuario.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('us_usuario.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_usuario.apellido', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_usuario.nombre', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_usuario.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_usuario.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('us_usuario.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('us_usuario.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_usuario.apellido', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_usuario.nombre', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_usuario.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_usuario.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('us_usuario.estado', 1, Criterio::IGUAL);

$c->addTabla('us_usuario');

$c->addOrden('us_usuario.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$us_usuarios_relacionados = UsUsuario::getUsUsuarios($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('UsUsuarios') ?></div>
<?php
if(count($us_usuarios_relacionados) > 0){    
    foreach($us_usuarios_relacionados as $us_usuario_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_us_usuario_<?php echo $us_usuario_relacionado->getId() ?>' >
            <?php
            include 'uno_us_usuario_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('UsUsuarios') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

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
$o_ids = eval('return $o_padre->getFndCajeroUsUsuariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = FndCajero::setAplicarFiltrosDeAlcance($c);
$c->add('fnd_cajero_us_usuario.us_usuario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('fnd_cajero');
$c->addRealJoin('fnd_cajero_us_usuario', 'fnd_cajero_us_usuario.fnd_cajero_id', 'fnd_cajero.id', 'LEFT JOIN');

$c->addOrden('fnd_cajero.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$fnd_cajeros_relacionados = FndCajero::getFndCajeros(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('FndCajeros') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($fnd_cajeros_relacionados) > 0){
    foreach($fnd_cajeros_relacionados as $fnd_cajero_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$fnd_cajero_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_fnd_cajero_<?php echo $fnd_cajero_relacionado->getId() ?>' >
            <?php
            include 'uno_fnd_cajero_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('FndCajeros') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = FndCajero::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('fnd_cajero.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('fnd_cajero.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('fnd_cajero.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('fnd_cajero.apellido', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('fnd_cajero.nombre', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('fnd_cajero.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('fnd_cajero.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('fnd_cajero.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('fnd_cajero.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('fnd_cajero.apellido', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('fnd_cajero.nombre', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('fnd_cajero.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('fnd_cajero.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('fnd_cajero.estado', 1, Criterio::IGUAL);

$c->addTabla('fnd_cajero');

$c->addOrden('fnd_cajero.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$fnd_cajeros_relacionados = FndCajero::getFndCajeros($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('FndCajeros') ?></div>
<?php
if(count($fnd_cajeros_relacionados) > 0){    
    foreach($fnd_cajeros_relacionados as $fnd_cajero_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_fnd_cajero_<?php echo $fnd_cajero_relacionado->getId() ?>' >
            <?php
            include 'uno_fnd_cajero_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('FndCajeros') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

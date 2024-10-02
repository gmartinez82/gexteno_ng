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
$o_ids = eval('return $o_padre->getFndChqTipoEmisorFndChqTipoEstadosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id', $padre_id, Criterio::IGUAL);
$c->addTabla('fnd_chq_tipo_emisor');
$c->addRealJoin('fnd_chq_tipo_emisor_fnd_chq_tipo_estado', 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id', 'fnd_chq_tipo_emisor.id', 'LEFT JOIN');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$fnd_chq_tipo_emisors_relacionados = FndChqTipoEmisor::getFndChqTipoEmisors(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('FndChqTipoEmisors') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($fnd_chq_tipo_emisors_relacionados) > 0){
    foreach($fnd_chq_tipo_emisors_relacionados as $fnd_chq_tipo_emisor_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$fnd_chq_tipo_emisor_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_fnd_chq_tipo_emisor_<?php echo $fnd_chq_tipo_emisor_relacionado->getId() ?>' >
            <?php
            include 'uno_fnd_chq_tipo_emisor_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('FndChqTipoEmisors') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
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


$c->add('estado', 1, Criterio::IGUAL);

$c->addTabla('fnd_chq_tipo_emisor');

$c->addOrden('orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$fnd_chq_tipo_emisors_relacionados = FndChqTipoEmisor::getFndChqTipoEmisors($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('FndChqTipoEmisors') ?></div>
<?php
if(count($fnd_chq_tipo_emisors_relacionados) > 0){    
    foreach($fnd_chq_tipo_emisors_relacionados as $fnd_chq_tipo_emisor_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_fnd_chq_tipo_emisor_<?php echo $fnd_chq_tipo_emisor_relacionado->getId() ?>' >
            <?php
            include 'uno_fnd_chq_tipo_emisor_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('FndChqTipoEmisors') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

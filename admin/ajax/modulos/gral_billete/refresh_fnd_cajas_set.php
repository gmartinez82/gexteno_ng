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
$o_ids = eval('return $o_padre->getFndCajaGralBilletesId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c->add('fnd_caja_gral_billete.gral_billete_id', $padre_id, Criterio::IGUAL);
$c->addTabla('fnd_caja');
$c->addRealJoin('fnd_caja_gral_billete', 'fnd_caja_gral_billete.fnd_caja_id', 'fnd_caja.id', 'LEFT JOIN');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$fnd_cajas_relacionados = FndCaja::getFndCajas(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('FndCajas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($fnd_cajas_relacionados) > 0){
    foreach($fnd_cajas_relacionados as $fnd_caja_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$fnd_caja_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_fnd_caja_<?php echo $fnd_caja_relacionado->getId() ?>' >
            <?php
            include 'uno_fnd_caja_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('FndCajas') ?> <?php Lang::_lang('Seleccionados') ?></div>
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

$c->addTabla('fnd_caja');

$c->addOrden('orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$fnd_cajas_relacionados = FndCaja::getFndCajas($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('FndCajas') ?></div>
<?php
if(count($fnd_cajas_relacionados) > 0){    
    foreach($fnd_cajas_relacionados as $fnd_caja_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_fnd_caja_<?php echo $fnd_caja_relacionado->getId() ?>' >
            <?php
            include 'uno_fnd_caja_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('FndCajas') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

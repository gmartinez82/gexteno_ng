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
$o_ids = eval('return $o_padre->getNovNovedadDestinatariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = NovNovedad::setAplicarFiltrosDeAlcance($c);
$c->add('nov_novedad_destinatario.us_usuario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('nov_novedad');
$c->addRealJoin('nov_novedad_destinatario', 'nov_novedad_destinatario.nov_novedad_id', 'nov_novedad.id', 'LEFT JOIN');

$c->addOrden('nov_novedad.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$nov_novedads_relacionados = NovNovedad::getNovNovedads(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('NovNovedads') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($nov_novedads_relacionados) > 0){
    foreach($nov_novedads_relacionados as $nov_novedad_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$nov_novedad_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_nov_novedad_<?php echo $nov_novedad_relacionado->getId() ?>' >
            <?php
            include 'uno_nov_novedad_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('NovNovedads') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = NovNovedad::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('nov_novedad.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('nov_novedad.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('nov_novedad.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('nov_novedad.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('nov_novedad.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('nov_novedad.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('nov_novedad.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('nov_novedad.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('nov_novedad.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('nov_novedad.estado', 1, Criterio::IGUAL);

$c->addTabla('nov_novedad');

$c->addOrden('nov_novedad.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$nov_novedads_relacionados = NovNovedad::getNovNovedads($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('NovNovedads') ?></div>
<?php
if(count($nov_novedads_relacionados) > 0){    
    foreach($nov_novedads_relacionados as $nov_novedad_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_nov_novedad_<?php echo $nov_novedad_relacionado->getId() ?>' >
            <?php
            include 'uno_nov_novedad_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('NovNovedads') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

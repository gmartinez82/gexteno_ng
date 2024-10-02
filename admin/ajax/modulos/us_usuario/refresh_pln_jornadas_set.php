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
$o_ids = eval('return $o_padre->getPlnJornadaUsUsuariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PlnJornada::setAplicarFiltrosDeAlcance($c);
$c->add('pln_jornada_us_usuario.us_usuario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('pln_jornada');
$c->addRealJoin('pln_jornada_us_usuario', 'pln_jornada_us_usuario.pln_jornada_id', 'pln_jornada.id', 'LEFT JOIN');

$c->addOrden('pln_jornada.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$pln_jornadas_relacionados = PlnJornada::getPlnJornadas(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('PlnJornadas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($pln_jornadas_relacionados) > 0){
    foreach($pln_jornadas_relacionados as $pln_jornada_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$pln_jornada_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_pln_jornada_<?php echo $pln_jornada_relacionado->getId() ?>' >
            <?php
            include 'uno_pln_jornada_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('PlnJornadas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PlnJornada::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('pln_jornada.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('pln_jornada.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('pln_jornada.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pln_jornada.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pln_jornada.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('pln_jornada.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('pln_jornada.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pln_jornada.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pln_jornada.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('pln_jornada.estado', 1, Criterio::IGUAL);

$c->addTabla('pln_jornada');

$c->addOrden('pln_jornada.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$pln_jornadas_relacionados = PlnJornada::getPlnJornadas($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('PlnJornadas') ?></div>
<?php
if(count($pln_jornadas_relacionados) > 0){    
    foreach($pln_jornadas_relacionados as $pln_jornada_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_pln_jornada_<?php echo $pln_jornada_relacionado->getId() ?>' >
            <?php
            include 'uno_pln_jornada_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('PlnJornadas') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

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
$o_ids = eval('return $o_padre->getUsAgrupadosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = UsGrupo::setAplicarFiltrosDeAlcance($c);
$c->add('us_agrupado.us_usuario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('us_grupo');
$c->addRealJoin('us_agrupado', 'us_agrupado.us_grupo_id', 'us_grupo.id', 'LEFT JOIN');

$c->addOrden('us_grupo.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$us_grupos_relacionados = UsGrupo::getUsGrupos(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('UsGrupos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($us_grupos_relacionados) > 0){
    foreach($us_grupos_relacionados as $us_grupo_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$us_grupo_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_us_grupo_<?php echo $us_grupo_relacionado->getId() ?>' >
            <?php
            include 'uno_us_grupo_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('UsGrupos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = UsGrupo::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('us_grupo.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('us_grupo.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('us_grupo.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_grupo.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_grupo.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('us_grupo.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('us_grupo.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_grupo.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_grupo.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('us_grupo.estado', 1, Criterio::IGUAL);

$c->addTabla('us_grupo');

$c->addOrden('us_grupo.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$us_grupos_relacionados = UsGrupo::getUsGrupos($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('UsGrupos') ?></div>
<?php
if(count($us_grupos_relacionados) > 0){    
    foreach($us_grupos_relacionados as $us_grupo_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_us_grupo_<?php echo $us_grupo_relacionado->getId() ?>' >
            <?php
            include 'uno_us_grupo_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('UsGrupos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

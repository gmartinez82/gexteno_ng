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
$o_ids = eval('return $o_padre->getPerPersonaUsUsuariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PerPersona::setAplicarFiltrosDeAlcance($c);
$c->add('per_persona_us_usuario.us_usuario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('per_persona');
$c->addRealJoin('per_persona_us_usuario', 'per_persona_us_usuario.per_persona_id', 'per_persona.id', 'LEFT JOIN');

$c->addOrden('per_persona.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$per_personas_relacionados = PerPersona::getPerPersonas(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('PerPersonas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($per_personas_relacionados) > 0){
    foreach($per_personas_relacionados as $per_persona_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$per_persona_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_per_persona_<?php echo $per_persona_relacionado->getId() ?>' >
            <?php
            include 'uno_per_persona_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('PerPersonas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PerPersona::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('per_persona.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('per_persona.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('per_persona.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('per_persona.apellido', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('per_persona.nombre', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('per_persona.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('per_persona.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('per_persona.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('per_persona.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('per_persona.apellido', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('per_persona.nombre', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('per_persona.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('per_persona.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('per_persona.estado', 1, Criterio::IGUAL);

$c->addTabla('per_persona');

$c->addOrden('per_persona.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$per_personas_relacionados = PerPersona::getPerPersonas($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('PerPersonas') ?></div>
<?php
if(count($per_personas_relacionados) > 0){    
    foreach($per_personas_relacionados as $per_persona_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_per_persona_<?php echo $per_persona_relacionado->getId() ?>' >
            <?php
            include 'uno_per_persona_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('PerPersonas') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

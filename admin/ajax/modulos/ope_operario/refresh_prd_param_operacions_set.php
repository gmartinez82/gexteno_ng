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
$o_ids = eval('return $o_padre->getPrdParamOperacionOpeOperariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PrdParamOperacion::setAplicarFiltrosDeAlcance($c);
$c->add('prd_param_operacion_ope_operario.ope_operario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('prd_param_operacion');
$c->addRealJoin('prd_param_operacion_ope_operario', 'prd_param_operacion_ope_operario.prd_param_operacion_id', 'prd_param_operacion.id', 'LEFT JOIN');

$c->addOrden('prd_param_operacion.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$prd_param_operacions_relacionados = PrdParamOperacion::getPrdParamOperacions(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('PrdParamOperacions') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($prd_param_operacions_relacionados) > 0){
    foreach($prd_param_operacions_relacionados as $prd_param_operacion_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$prd_param_operacion_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_prd_param_operacion_<?php echo $prd_param_operacion_relacionado->getId() ?>' >
            <?php
            include 'uno_prd_param_operacion_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('PrdParamOperacions') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PrdParamOperacion::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('prd_param_operacion.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('prd_param_operacion.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('prd_param_operacion.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('prd_param_operacion.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('prd_param_operacion.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('prd_param_operacion.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('prd_param_operacion.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('prd_param_operacion.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('prd_param_operacion.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('prd_param_operacion.estado', 1, Criterio::IGUAL);

$c->addTabla('prd_param_operacion');

$c->addOrden('prd_param_operacion.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$prd_param_operacions_relacionados = PrdParamOperacion::getPrdParamOperacions($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('PrdParamOperacions') ?></div>
<?php
if(count($prd_param_operacions_relacionados) > 0){    
    foreach($prd_param_operacions_relacionados as $prd_param_operacion_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_prd_param_operacion_<?php echo $prd_param_operacion_relacionado->getId() ?>' >
            <?php
            include 'uno_prd_param_operacion_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('PrdParamOperacions') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

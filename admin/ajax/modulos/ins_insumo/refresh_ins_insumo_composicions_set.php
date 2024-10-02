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
$o_ids = eval('return $o_padre->getInsInsumoComposicionsId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = InsInsumo::setAplicarFiltrosDeAlcance($c);
$c->add('ins_insumo_composicion.ins_insumo_id', $padre_id, Criterio::IGUAL);
$c->addTabla('ins_insumo');
$c->addRealJoin('ins_insumo_composicion', 'ins_insumo_composicion.ins_insumo_composicion', 'ins_insumo.id', 'LEFT JOIN');

$c->addOrden('ins_insumo.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$ins_insumo_composicions_relacionados = InsInsumo::getInsInsumos(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('InsInsumos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($ins_insumo_composicions_relacionados) > 0){
    foreach($ins_insumo_composicions_relacionados as $ins_insumo_composicion_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$ins_insumo_composicion_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ins_insumo_composicion_<?php echo $ins_insumo_composicion_relacionado->getId() ?>' >
            <?php
            include 'uno_ins_insumo_composicion_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('InsInsumoComposicions') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = InsInsumo::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('ins_insumo.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('ins_insumo.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ins_insumo.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_insumo.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_insumo.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('ins_insumo.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ins_insumo.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_insumo.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_insumo.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('ins_insumo.estado', 1, Criterio::IGUAL);

$c->addTabla('ins_insumo');

$c->addOrden('ins_insumo.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$ins_insumo_composicions_relacionados = InsInsumo::getInsInsumos($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('InsInsumoComposicions') ?></div>
<?php
if(count($ins_insumo_composicions_relacionados) > 0){    
    foreach($ins_insumo_composicions_relacionados as $ins_insumo_composicion_relacionado){

        // solo se agrega esta linea si es una relacion espejo y no admite seleccion del mismo
        if($ins_insumo_composicion_relacionado->getId() == $o_padre->getId()) continue;
    
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ins_insumo_composicion_<?php echo $ins_insumo_composicion_relacionado->getId() ?>' >
            <?php
            include 'uno_ins_insumo_composicion_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('InsInsumoComposicions') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

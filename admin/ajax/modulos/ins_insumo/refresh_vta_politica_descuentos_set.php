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
$o_ids = eval('return $o_padre->getVtaPoliticaDescuentoInsInsumosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = VtaPoliticaDescuento::setAplicarFiltrosDeAlcance($c);
$c->add('vta_politica_descuento_ins_insumo.ins_insumo_id', $padre_id, Criterio::IGUAL);
$c->addTabla('vta_politica_descuento');
$c->addRealJoin('vta_politica_descuento_ins_insumo', 'vta_politica_descuento_ins_insumo.vta_politica_descuento_id', 'vta_politica_descuento.id', 'LEFT JOIN');

$c->addOrden('vta_politica_descuento.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$vta_politica_descuentos_relacionados = VtaPoliticaDescuento::getVtaPoliticaDescuentos(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('VtaPoliticaDescuentos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($vta_politica_descuentos_relacionados) > 0){
    foreach($vta_politica_descuentos_relacionados as $vta_politica_descuento_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$vta_politica_descuento_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_vta_politica_descuento_<?php echo $vta_politica_descuento_relacionado->getId() ?>' >
            <?php
            include 'uno_vta_politica_descuento_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('VtaPoliticaDescuentos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = VtaPoliticaDescuento::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('vta_politica_descuento.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('vta_politica_descuento.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('vta_politica_descuento.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('vta_politica_descuento.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('vta_politica_descuento.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('vta_politica_descuento.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('vta_politica_descuento.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('vta_politica_descuento.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('vta_politica_descuento.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('vta_politica_descuento.estado', 1, Criterio::IGUAL);

$c->addTabla('vta_politica_descuento');

$c->addOrden('vta_politica_descuento.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$vta_politica_descuentos_relacionados = VtaPoliticaDescuento::getVtaPoliticaDescuentos($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('VtaPoliticaDescuentos') ?></div>
<?php
if(count($vta_politica_descuentos_relacionados) > 0){    
    foreach($vta_politica_descuentos_relacionados as $vta_politica_descuento_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_vta_politica_descuento_<?php echo $vta_politica_descuento_relacionado->getId() ?>' >
            <?php
            include 'uno_vta_politica_descuento_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('VtaPoliticaDescuentos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

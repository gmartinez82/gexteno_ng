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
$o_ids = eval('return $o_padre->getVtaNotaCreditoVtaFacturaVtaTributosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c->add('vta_nota_credito_vta_factura_vta_tributo.vta_nota_credito_id', $padre_id, Criterio::IGUAL);
$c->addTabla('vta_factura_vta_tributo');
$c->addRealJoin('vta_nota_credito_vta_factura_vta_tributo', 'vta_nota_credito_vta_factura_vta_tributo.vta_factura_vta_tributo_id', 'vta_factura_vta_tributo.id', 'LEFT JOIN');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$vta_factura_vta_tributos_relacionados = VtaFacturaVtaTributo::getVtaFacturaVtaTributos(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('VtaFacturaVtaTributos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($vta_factura_vta_tributos_relacionados) > 0){
    foreach($vta_factura_vta_tributos_relacionados as $vta_factura_vta_tributo_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$vta_factura_vta_tributo_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_vta_factura_vta_tributo_<?php echo $vta_factura_vta_tributo_relacionado->getId() ?>' >
            <?php
            include 'uno_vta_factura_vta_tributo_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('VtaFacturaVtaTributos') ?> <?php Lang::_lang('Seleccionados') ?></div>
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

$c->addTabla('vta_factura_vta_tributo');

$c->addOrden('orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$vta_factura_vta_tributos_relacionados = VtaFacturaVtaTributo::getVtaFacturaVtaTributos($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('VtaFacturaVtaTributos') ?></div>
<?php
if(count($vta_factura_vta_tributos_relacionados) > 0){    
    foreach($vta_factura_vta_tributos_relacionados as $vta_factura_vta_tributo_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_vta_factura_vta_tributo_<?php echo $vta_factura_vta_tributo_relacionado->getId() ?>' >
            <?php
            include 'uno_vta_factura_vta_tributo_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('VtaFacturaVtaTributos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

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
$o_ids = eval('return $o_padre->getGralCondicionIvaVtaTipoFacturasId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = VtaTipoFactura::setAplicarFiltrosDeAlcance($c);
$c->add('gral_condicion_iva_vta_tipo_factura.gral_condicion_iva_id', $padre_id, Criterio::IGUAL);
$c->addTabla('vta_tipo_factura');
$c->addRealJoin('gral_condicion_iva_vta_tipo_factura', 'gral_condicion_iva_vta_tipo_factura.vta_tipo_factura_id', 'vta_tipo_factura.id', 'LEFT JOIN');

$c->addOrden('vta_tipo_factura.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$vta_tipo_facturas_relacionados = VtaTipoFactura::getVtaTipoFacturas(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('VtaTipoFacturas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($vta_tipo_facturas_relacionados) > 0){
    foreach($vta_tipo_facturas_relacionados as $vta_tipo_factura_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$vta_tipo_factura_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_vta_tipo_factura_<?php echo $vta_tipo_factura_relacionado->getId() ?>' >
            <?php
            include 'uno_vta_tipo_factura_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('VtaTipoFacturas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = VtaTipoFactura::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('vta_tipo_factura.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('vta_tipo_factura.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('vta_tipo_factura.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('vta_tipo_factura.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('vta_tipo_factura.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('vta_tipo_factura.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('vta_tipo_factura.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('vta_tipo_factura.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('vta_tipo_factura.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('vta_tipo_factura.estado', 1, Criterio::IGUAL);

$c->addTabla('vta_tipo_factura');

$c->addOrden('vta_tipo_factura.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$vta_tipo_facturas_relacionados = VtaTipoFactura::getVtaTipoFacturas($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('VtaTipoFacturas') ?></div>
<?php
if(count($vta_tipo_facturas_relacionados) > 0){    
    foreach($vta_tipo_facturas_relacionados as $vta_tipo_factura_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_vta_tipo_factura_<?php echo $vta_tipo_factura_relacionado->getId() ?>' >
            <?php
            include 'uno_vta_tipo_factura_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('VtaTipoFacturas') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

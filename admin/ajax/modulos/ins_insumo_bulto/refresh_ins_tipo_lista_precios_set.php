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
$o_ids = eval('return $o_padre->getInsInsumoBultoInsTipoListaPreciosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = InsTipoListaPrecio::setAplicarFiltrosDeAlcance($c);
$c->add('ins_insumo_bulto_ins_tipo_lista_precio.ins_insumo_bulto_id', $padre_id, Criterio::IGUAL);
$c->addTabla('ins_tipo_lista_precio');
$c->addRealJoin('ins_insumo_bulto_ins_tipo_lista_precio', 'ins_insumo_bulto_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id', 'LEFT JOIN');

$c->addOrden('ins_tipo_lista_precio.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$ins_tipo_lista_precios_relacionados = InsTipoListaPrecio::getInsTipoListaPrecios(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('InsTipoListaPrecios') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($ins_tipo_lista_precios_relacionados) > 0){
    foreach($ins_tipo_lista_precios_relacionados as $ins_tipo_lista_precio_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$ins_tipo_lista_precio_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ins_tipo_lista_precio_<?php echo $ins_tipo_lista_precio_relacionado->getId() ?>' >
            <?php
            include 'uno_ins_tipo_lista_precio_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('InsTipoListaPrecios') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = InsTipoListaPrecio::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('ins_tipo_lista_precio.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('ins_tipo_lista_precio.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ins_tipo_lista_precio.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_tipo_lista_precio.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_tipo_lista_precio.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('ins_tipo_lista_precio.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ins_tipo_lista_precio.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_tipo_lista_precio.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_tipo_lista_precio.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('ins_tipo_lista_precio.estado', 1, Criterio::IGUAL);

$c->addTabla('ins_tipo_lista_precio');

$c->addOrden('ins_tipo_lista_precio.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$ins_tipo_lista_precios_relacionados = InsTipoListaPrecio::getInsTipoListaPrecios($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('InsTipoListaPrecios') ?></div>
<?php
if(count($ins_tipo_lista_precios_relacionados) > 0){    
    foreach($ins_tipo_lista_precios_relacionados as $ins_tipo_lista_precio_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ins_tipo_lista_precio_<?php echo $ins_tipo_lista_precio_relacionado->getId() ?>' >
            <?php
            include 'uno_ins_tipo_lista_precio_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('InsTipoListaPrecios') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

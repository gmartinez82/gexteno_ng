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
$o_ids = eval('return $o_padre->getCatCatalogoCliClientesId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = CatCatalogo::setAplicarFiltrosDeAlcance($c);
$c->add('cat_catalogo_cli_cliente.cli_cliente_id', $padre_id, Criterio::IGUAL);
$c->addTabla('cat_catalogo');
$c->addRealJoin('cat_catalogo_cli_cliente', 'cat_catalogo_cli_cliente.cat_catalogo_id', 'cat_catalogo.id', 'LEFT JOIN');

$c->addOrden('cat_catalogo.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$cat_catalogos_relacionados = CatCatalogo::getCatCatalogos(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('CatCatalogos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($cat_catalogos_relacionados) > 0){
    foreach($cat_catalogos_relacionados as $cat_catalogo_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$cat_catalogo_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_cat_catalogo_<?php echo $cat_catalogo_relacionado->getId() ?>' >
            <?php
            include 'uno_cat_catalogo_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('CatCatalogos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = CatCatalogo::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('cat_catalogo.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('cat_catalogo.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('cat_catalogo.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cat_catalogo.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cat_catalogo.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('cat_catalogo.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('cat_catalogo.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cat_catalogo.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cat_catalogo.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('cat_catalogo.estado', 1, Criterio::IGUAL);

$c->addTabla('cat_catalogo');

$c->addOrden('cat_catalogo.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$cat_catalogos_relacionados = CatCatalogo::getCatCatalogos($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('CatCatalogos') ?></div>
<?php
if(count($cat_catalogos_relacionados) > 0){    
    foreach($cat_catalogos_relacionados as $cat_catalogo_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_cat_catalogo_<?php echo $cat_catalogo_relacionado->getId() ?>' >
            <?php
            include 'uno_cat_catalogo_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('CatCatalogos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

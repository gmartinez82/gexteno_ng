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
$o_ids = eval('return $o_padre->getGralSucursalPanPanolsId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PanPanol::setAplicarFiltrosDeAlcance($c);
$c->add('gral_sucursal_pan_panol.gral_sucursal_id', $padre_id, Criterio::IGUAL);
$c->addTabla('pan_panol');
$c->addRealJoin('gral_sucursal_pan_panol', 'gral_sucursal_pan_panol.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');

$c->addOrden('pan_panol.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$pan_panols_relacionados = PanPanol::getPanPanols(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('PanPanols') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($pan_panols_relacionados) > 0){
    foreach($pan_panols_relacionados as $pan_panol_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$pan_panol_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_pan_panol_<?php echo $pan_panol_relacionado->getId() ?>' >
            <?php
            include 'uno_pan_panol_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('PanPanols') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PanPanol::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('pan_panol.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('pan_panol.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('pan_panol.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pan_panol.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pan_panol.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('pan_panol.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('pan_panol.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pan_panol.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pan_panol.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('pan_panol.estado', 1, Criterio::IGUAL);

$c->addTabla('pan_panol');

$c->addOrden('pan_panol.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$pan_panols_relacionados = PanPanol::getPanPanols($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('PanPanols') ?></div>
<?php
if(count($pan_panols_relacionados) > 0){    
    foreach($pan_panols_relacionados as $pan_panol_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_pan_panol_<?php echo $pan_panol_relacionado->getId() ?>' >
            <?php
            include 'uno_pan_panol_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('PanPanols') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

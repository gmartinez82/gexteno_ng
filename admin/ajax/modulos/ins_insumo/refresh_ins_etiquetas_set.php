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
$o_ids = eval('return $o_padre->getInsInsumoInsEtiquetasId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = InsEtiqueta::setAplicarFiltrosDeAlcance($c);
$c->add('ins_insumo_ins_etiqueta.ins_insumo_id', $padre_id, Criterio::IGUAL);
$c->addTabla('ins_etiqueta');
$c->addRealJoin('ins_insumo_ins_etiqueta', 'ins_insumo_ins_etiqueta.ins_etiqueta_id', 'ins_etiqueta.id', 'LEFT JOIN');

$c->addOrden('ins_etiqueta.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$ins_etiquetas_relacionados = InsEtiqueta::getInsEtiquetas(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('InsEtiquetas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($ins_etiquetas_relacionados) > 0){
    foreach($ins_etiquetas_relacionados as $ins_etiqueta_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$ins_etiqueta_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ins_etiqueta_<?php echo $ins_etiqueta_relacionado->getId() ?>' >
            <?php
            include 'uno_ins_etiqueta_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('InsEtiquetas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = InsEtiqueta::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('ins_etiqueta.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('ins_etiqueta.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ins_etiqueta.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_etiqueta.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_etiqueta.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('ins_etiqueta.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ins_etiqueta.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_etiqueta.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_etiqueta.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('ins_etiqueta.estado', 1, Criterio::IGUAL);

$c->addTabla('ins_etiqueta');

$c->addOrden('ins_etiqueta.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$ins_etiquetas_relacionados = InsEtiqueta::getInsEtiquetas($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('InsEtiquetas') ?></div>
<?php
if(count($ins_etiquetas_relacionados) > 0){    
    foreach($ins_etiquetas_relacionados as $ins_etiqueta_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ins_etiqueta_<?php echo $ins_etiqueta_relacionado->getId() ?>' >
            <?php
            include 'uno_ins_etiqueta_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('InsEtiquetas') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

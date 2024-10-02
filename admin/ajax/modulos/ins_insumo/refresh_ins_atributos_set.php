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
$o_ids = eval('return $o_padre->getInsInsumoInsAtributosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = InsAtributo::setAplicarFiltrosDeAlcance($c);
$c->add('ins_insumo_ins_atributo.ins_insumo_id', $padre_id, Criterio::IGUAL);
$c->addTabla('ins_atributo');
$c->addRealJoin('ins_insumo_ins_atributo', 'ins_insumo_ins_atributo.ins_atributo_id', 'ins_atributo.id', 'LEFT JOIN');

$c->addOrden('ins_atributo.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$ins_atributos_relacionados = InsAtributo::getInsAtributos(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('InsAtributos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($ins_atributos_relacionados) > 0){
    foreach($ins_atributos_relacionados as $ins_atributo_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$ins_atributo_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ins_atributo_<?php echo $ins_atributo_relacionado->getId() ?>' >
            <?php
            include 'uno_ins_atributo_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('InsAtributos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = InsAtributo::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('ins_atributo.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('ins_atributo.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ins_atributo.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_atributo.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_atributo.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('ins_atributo.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ins_atributo.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_atributo.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_atributo.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('ins_atributo.estado', 1, Criterio::IGUAL);

$c->addTabla('ins_atributo');

$c->addOrden('ins_atributo.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$ins_atributos_relacionados = InsAtributo::getInsAtributos($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('InsAtributos') ?></div>
<?php
if(count($ins_atributos_relacionados) > 0){    
    foreach($ins_atributos_relacionados as $ins_atributo_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ins_atributo_<?php echo $ins_atributo_relacionado->getId() ?>' >
            <?php
            include 'uno_ins_atributo_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('InsAtributos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

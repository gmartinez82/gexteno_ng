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
$o_ids = eval('return $o_padre->getPrvProveedorPrvRubrosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PrvRubro::setAplicarFiltrosDeAlcance($c);
$c->add('prv_proveedor_prv_rubro.prv_proveedor_id', $padre_id, Criterio::IGUAL);
$c->addTabla('prv_rubro');
$c->addRealJoin('prv_proveedor_prv_rubro', 'prv_proveedor_prv_rubro.prv_rubro_id', 'prv_rubro.id', 'LEFT JOIN');

$c->addOrden('prv_rubro.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$prv_rubros_relacionados = PrvRubro::getPrvRubros(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('PrvRubros') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($prv_rubros_relacionados) > 0){
    foreach($prv_rubros_relacionados as $prv_rubro_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$prv_rubro_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_prv_rubro_<?php echo $prv_rubro_relacionado->getId() ?>' >
            <?php
            include 'uno_prv_rubro_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('PrvRubros') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PrvRubro::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('prv_rubro.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('prv_rubro.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('prv_rubro.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('prv_rubro.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('prv_rubro.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('prv_rubro.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('prv_rubro.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('prv_rubro.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('prv_rubro.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('prv_rubro.estado', 1, Criterio::IGUAL);

$c->addTabla('prv_rubro');

$c->addOrden('prv_rubro.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$prv_rubros_relacionados = PrvRubro::getPrvRubros($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('PrvRubros') ?></div>
<?php
if(count($prv_rubros_relacionados) > 0){    
    foreach($prv_rubros_relacionados as $prv_rubro_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_prv_rubro_<?php echo $prv_rubro_relacionado->getId() ?>' >
            <?php
            include 'uno_prv_rubro_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('PrvRubros') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

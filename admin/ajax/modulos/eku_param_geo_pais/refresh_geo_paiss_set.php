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
$o_ids = eval('return $o_padre->getEkuParamGeoPaisGeoPaissId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GeoPais::setAplicarFiltrosDeAlcance($c);
$c->add('eku_param_geo_pais_geo_pais.eku_param_geo_pais_id', $padre_id, Criterio::IGUAL);
$c->addTabla('geo_pais');
$c->addRealJoin('eku_param_geo_pais_geo_pais', 'eku_param_geo_pais_geo_pais.geo_pais_id', 'geo_pais.id', 'LEFT JOIN');

$c->addOrden('geo_pais.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$geo_paiss_relacionados = GeoPais::getGeoPaiss(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('GeoPaiss') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($geo_paiss_relacionados) > 0){
    foreach($geo_paiss_relacionados as $geo_pais_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$geo_pais_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_geo_pais_<?php echo $geo_pais_relacionado->getId() ?>' >
            <?php
            include 'uno_geo_pais_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('GeoPaiss') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GeoPais::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('geo_pais.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('geo_pais.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('geo_pais.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('geo_pais.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('geo_pais.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('geo_pais.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('geo_pais.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('geo_pais.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('geo_pais.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('geo_pais.estado', 1, Criterio::IGUAL);

$c->addTabla('geo_pais');

$c->addOrden('geo_pais.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$geo_paiss_relacionados = GeoPais::getGeoPaiss($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('GeoPaiss') ?></div>
<?php
if(count($geo_paiss_relacionados) > 0){    
    foreach($geo_paiss_relacionados as $geo_pais_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_geo_pais_<?php echo $geo_pais_relacionado->getId() ?>' >
            <?php
            include 'uno_geo_pais_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('GeoPaiss') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

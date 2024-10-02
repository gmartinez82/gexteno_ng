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
$o_ids = eval('return $o_padre->getEkuParamGeoCiudadGeoLocalidadsId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GeoLocalidad::setAplicarFiltrosDeAlcance($c);
$c->add('eku_param_geo_ciudad_geo_localidad.eku_param_geo_ciudad_id', $padre_id, Criterio::IGUAL);
$c->addTabla('geo_localidad');
$c->addRealJoin('eku_param_geo_ciudad_geo_localidad', 'eku_param_geo_ciudad_geo_localidad.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');

$c->addOrden('geo_localidad.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$geo_localidads_relacionados = GeoLocalidad::getGeoLocalidads(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('GeoLocalidads') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($geo_localidads_relacionados) > 0){
    foreach($geo_localidads_relacionados as $geo_localidad_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$geo_localidad_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_geo_localidad_<?php echo $geo_localidad_relacionado->getId() ?>' >
            <?php
            include 'uno_geo_localidad_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('GeoLocalidads') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GeoLocalidad::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('geo_localidad.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('geo_localidad.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('geo_localidad.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('geo_localidad.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('geo_localidad.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('geo_localidad.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('geo_localidad.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('geo_localidad.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('geo_localidad.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('geo_localidad.estado', 1, Criterio::IGUAL);

$c->addTabla('geo_localidad');

$c->addOrden('geo_localidad.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$geo_localidads_relacionados = GeoLocalidad::getGeoLocalidads($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('GeoLocalidads') ?></div>
<?php
if(count($geo_localidads_relacionados) > 0){    
    foreach($geo_localidads_relacionados as $geo_localidad_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_geo_localidad_<?php echo $geo_localidad_relacionado->getId() ?>' >
            <?php
            include 'uno_geo_localidad_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('GeoLocalidads') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

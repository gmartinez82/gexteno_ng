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
$o_ids = eval('return $o_padre->getEkuParamTipoContribuyenteGralTipoPersoneriasId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GralTipoPersoneria::setAplicarFiltrosDeAlcance($c);
$c->add('eku_param_tipo_contribuyente_gral_tipo_personeria.eku_param_tipo_contribuyente_id', $padre_id, Criterio::IGUAL);
$c->addTabla('gral_tipo_personeria');
$c->addRealJoin('eku_param_tipo_contribuyente_gral_tipo_personeria', 'eku_param_tipo_contribuyente_gral_tipo_personeria.gral_tipo_personeria_id', 'gral_tipo_personeria.id', 'LEFT JOIN');

$c->addOrden('gral_tipo_personeria.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$gral_tipo_personerias_relacionados = GralTipoPersoneria::getGralTipoPersonerias(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('GralTipoPersonerias') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($gral_tipo_personerias_relacionados) > 0){
    foreach($gral_tipo_personerias_relacionados as $gral_tipo_personeria_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$gral_tipo_personeria_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_gral_tipo_personeria_<?php echo $gral_tipo_personeria_relacionado->getId() ?>' >
            <?php
            include 'uno_gral_tipo_personeria_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('GralTipoPersonerias') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GralTipoPersoneria::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('gral_tipo_personeria.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('gral_tipo_personeria.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('gral_tipo_personeria.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_tipo_personeria.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_tipo_personeria.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('gral_tipo_personeria.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('gral_tipo_personeria.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_tipo_personeria.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_tipo_personeria.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('gral_tipo_personeria.estado', 1, Criterio::IGUAL);

$c->addTabla('gral_tipo_personeria');

$c->addOrden('gral_tipo_personeria.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$gral_tipo_personerias_relacionados = GralTipoPersoneria::getGralTipoPersonerias($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('GralTipoPersonerias') ?></div>
<?php
if(count($gral_tipo_personerias_relacionados) > 0){    
    foreach($gral_tipo_personerias_relacionados as $gral_tipo_personeria_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_gral_tipo_personeria_<?php echo $gral_tipo_personeria_relacionado->getId() ?>' >
            <?php
            include 'uno_gral_tipo_personeria_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('GralTipoPersonerias') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

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
$o_ids = eval('return $o_padre->getEkuParamTipoPresenciaGralEscenariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = EkuParamTipoPresencia::setAplicarFiltrosDeAlcance($c);
$c->add('eku_param_tipo_presencia_gral_escenario.gral_escenario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('eku_param_tipo_presencia');
$c->addRealJoin('eku_param_tipo_presencia_gral_escenario', 'eku_param_tipo_presencia_gral_escenario.eku_param_tipo_presencia_id', 'eku_param_tipo_presencia.id', 'LEFT JOIN');

$c->addOrden('eku_param_tipo_presencia.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$eku_param_tipo_presencias_relacionados = EkuParamTipoPresencia::getEkuParamTipoPresencias(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('EkuParamTipoPresencias') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($eku_param_tipo_presencias_relacionados) > 0){
    foreach($eku_param_tipo_presencias_relacionados as $eku_param_tipo_presencia_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$eku_param_tipo_presencia_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_eku_param_tipo_presencia_<?php echo $eku_param_tipo_presencia_relacionado->getId() ?>' >
            <?php
            include 'uno_eku_param_tipo_presencia_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('EkuParamTipoPresencias') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = EkuParamTipoPresencia::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('eku_param_tipo_presencia.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('eku_param_tipo_presencia.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('eku_param_tipo_presencia.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('eku_param_tipo_presencia.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('eku_param_tipo_presencia.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('eku_param_tipo_presencia.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('eku_param_tipo_presencia.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('eku_param_tipo_presencia.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('eku_param_tipo_presencia.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('eku_param_tipo_presencia.estado', 1, Criterio::IGUAL);

$c->addTabla('eku_param_tipo_presencia');

$c->addOrden('eku_param_tipo_presencia.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$eku_param_tipo_presencias_relacionados = EkuParamTipoPresencia::getEkuParamTipoPresencias($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('EkuParamTipoPresencias') ?></div>
<?php
if(count($eku_param_tipo_presencias_relacionados) > 0){    
    foreach($eku_param_tipo_presencias_relacionados as $eku_param_tipo_presencia_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_eku_param_tipo_presencia_<?php echo $eku_param_tipo_presencia_relacionado->getId() ?>' >
            <?php
            include 'uno_eku_param_tipo_presencia_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('EkuParamTipoPresencias') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

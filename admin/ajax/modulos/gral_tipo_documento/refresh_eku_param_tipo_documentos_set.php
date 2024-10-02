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
$o_ids = eval('return $o_padre->getEkuParamTipoDocumentoGralTipoDocumentosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = EkuParamTipoDocumento::setAplicarFiltrosDeAlcance($c);
$c->add('eku_param_tipo_documento_gral_tipo_documento.gral_tipo_documento_id', $padre_id, Criterio::IGUAL);
$c->addTabla('eku_param_tipo_documento');
$c->addRealJoin('eku_param_tipo_documento_gral_tipo_documento', 'eku_param_tipo_documento_gral_tipo_documento.eku_param_tipo_documento_id', 'eku_param_tipo_documento.id', 'LEFT JOIN');

$c->addOrden('eku_param_tipo_documento.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$eku_param_tipo_documentos_relacionados = EkuParamTipoDocumento::getEkuParamTipoDocumentos(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('EkuParamTipoDocumentos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($eku_param_tipo_documentos_relacionados) > 0){
    foreach($eku_param_tipo_documentos_relacionados as $eku_param_tipo_documento_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$eku_param_tipo_documento_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_eku_param_tipo_documento_<?php echo $eku_param_tipo_documento_relacionado->getId() ?>' >
            <?php
            include 'uno_eku_param_tipo_documento_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('EkuParamTipoDocumentos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = EkuParamTipoDocumento::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('eku_param_tipo_documento.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('eku_param_tipo_documento.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('eku_param_tipo_documento.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('eku_param_tipo_documento.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('eku_param_tipo_documento.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('eku_param_tipo_documento.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('eku_param_tipo_documento.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('eku_param_tipo_documento.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('eku_param_tipo_documento.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('eku_param_tipo_documento.estado', 1, Criterio::IGUAL);

$c->addTabla('eku_param_tipo_documento');

$c->addOrden('eku_param_tipo_documento.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$eku_param_tipo_documentos_relacionados = EkuParamTipoDocumento::getEkuParamTipoDocumentos($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('EkuParamTipoDocumentos') ?></div>
<?php
if(count($eku_param_tipo_documentos_relacionados) > 0){    
    foreach($eku_param_tipo_documentos_relacionados as $eku_param_tipo_documento_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_eku_param_tipo_documento_<?php echo $eku_param_tipo_documento_relacionado->getId() ?>' >
            <?php
            include 'uno_eku_param_tipo_documento_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('EkuParamTipoDocumentos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

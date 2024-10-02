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
$o_ids = eval('return $o_padre->getGralCondicionIvaPdeTipoNotaDebitosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PdeTipoNotaDebito::setAplicarFiltrosDeAlcance($c);
$c->add('gral_condicion_iva_pde_tipo_nota_debito.gral_condicion_iva_id', $padre_id, Criterio::IGUAL);
$c->addTabla('pde_tipo_nota_debito');
$c->addRealJoin('gral_condicion_iva_pde_tipo_nota_debito', 'gral_condicion_iva_pde_tipo_nota_debito.pde_tipo_nota_debito_id', 'pde_tipo_nota_debito.id', 'LEFT JOIN');

$c->addOrden('pde_tipo_nota_debito.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$pde_tipo_nota_debitos_relacionados = PdeTipoNotaDebito::getPdeTipoNotaDebitos(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('PdeTipoNotaDebitos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($pde_tipo_nota_debitos_relacionados) > 0){
    foreach($pde_tipo_nota_debitos_relacionados as $pde_tipo_nota_debito_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$pde_tipo_nota_debito_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_pde_tipo_nota_debito_<?php echo $pde_tipo_nota_debito_relacionado->getId() ?>' >
            <?php
            include 'uno_pde_tipo_nota_debito_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('PdeTipoNotaDebitos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PdeTipoNotaDebito::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('pde_tipo_nota_debito.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('pde_tipo_nota_debito.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('pde_tipo_nota_debito.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pde_tipo_nota_debito.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pde_tipo_nota_debito.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('pde_tipo_nota_debito.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('pde_tipo_nota_debito.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pde_tipo_nota_debito.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pde_tipo_nota_debito.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('pde_tipo_nota_debito.estado', 1, Criterio::IGUAL);

$c->addTabla('pde_tipo_nota_debito');

$c->addOrden('pde_tipo_nota_debito.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$pde_tipo_nota_debitos_relacionados = PdeTipoNotaDebito::getPdeTipoNotaDebitos($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('PdeTipoNotaDebitos') ?></div>
<?php
if(count($pde_tipo_nota_debitos_relacionados) > 0){    
    foreach($pde_tipo_nota_debitos_relacionados as $pde_tipo_nota_debito_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_pde_tipo_nota_debito_<?php echo $pde_tipo_nota_debito_relacionado->getId() ?>' >
            <?php
            include 'uno_pde_tipo_nota_debito_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('PdeTipoNotaDebitos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

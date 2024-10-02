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
$o_ids = eval('return $o_padre->getNotRelacionadasId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c->add('not_relacionada.not_noticia_id', $padre_id, Criterio::IGUAL);
$c->addTabla('not_noticia');
$c->addRealJoin('not_relacionada', 'not_relacionada.not_noticia_relacionada', 'not_noticia.id', 'LEFT JOIN');

$c->addOrden('orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$not_noticia_relacionadas_relacionados = NotNoticia::getNotNoticias(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('NotNoticias') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($not_noticia_relacionadas_relacionados) > 0){
    foreach($not_noticia_relacionadas_relacionados as $not_noticia_relacionada_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$not_noticia_relacionada_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_not_noticia_relacionada_<?php echo $not_noticia_relacionada_relacionado->getId() ?>' >
            <?php
            include 'uno_not_noticia_relacionada_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('NotNoticiaRelacionadas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('id', '('.$ids_seleccionados.')', Criterio::NOTIN, false, '');
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->add('id', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);

    $c->add('descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
}


$c->add('estado', 1, Criterio::IGUAL);

$c->addTabla('not_noticia');

$c->addOrden('orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$not_noticia_relacionadas_relacionados = NotNoticia::getNotNoticias($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('NotNoticiaRelacionadas') ?></div>
<?php
if(count($not_noticia_relacionadas_relacionados) > 0){    
    foreach($not_noticia_relacionadas_relacionados as $not_noticia_relacionada_relacionado){

        // solo se agrega esta linea si es una relacion espejo
        if($not_noticia_relacionada_relacionado->getId() == $o_padre->getId()) continue;
    
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_not_noticia_relacionada_<?php echo $not_noticia_relacionada_relacionado->getId() ?>' >
            <?php
            include 'uno_not_noticia_relacionada_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('NotNoticiaRelacionadas') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>

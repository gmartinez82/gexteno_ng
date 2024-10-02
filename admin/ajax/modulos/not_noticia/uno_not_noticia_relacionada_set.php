<?php
$sel = '';
$css_sel = '';
$not_relacionada_id = '';
if(in_array($not_noticia_relacionada_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'not_noticia_id', 'valor' => $o_padre->getId()),
        array('campo' => 'not_noticia_relacionada', 'valor' => $not_noticia_relacionada_relacionado->getId())
    );
    $not_relacionada = NotRelacionada::getOxArray($array);
    $not_relacionada_id = $not_relacionada->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_RELACION_NOT_NOTICIA_RELACIONADA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_not_noticia_relacionada_id_<?php echo $not_noticia_relacionada_relacionado->getId() ?>' name='chk_not_noticia_relacionada[<?php echo $not_noticia_relacionada_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $not_noticia_relacionada_relacionado->getId() ?>' relacion_id='<?php echo $not_relacionada_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_RELACION_NOT_NOTICIA_RELACIONADA_ACCIONES_EDITAR')){ ?>	
        <?php if($not_relacionada_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/not_relacionada/not_relacionada_alta.php?id=<?php Gral::_echo($not_relacionada_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($not_noticia_relacionada_relacionado->getId()) ?>, 'not_noticia', 'not_noticia', <?php Gral::_echo($o_padre->getId()) ?>, 'NotNoticia', 'NotRelacionada')" title="Editar NotRelacionada"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA')){ ?>	
        <a class='boton' href='not_noticia_alta.php?id=<?php echo $not_noticia_relacionada_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($not_noticia_relacionada_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    
    <label class="avatar">
        <a href="<?php echo $not_noticia_relacionada_relacionado->getPathImagenPrincipal() ?>" rel="imagen-not_noticia_relacionada-<?php echo $not_noticia_relacionada_relacionado->getId() ?>">
            <img src="<?php echo $not_noticia_relacionada_relacionado->getPathImagenPrincipal(true) ?>" width="22" title="Imagen del NotNoticia" />
        </a>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($not_noticia_relacionada_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($not_noticia_relacionada_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $not_noticia_relacionada_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($not_relacionada_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>


<?php
$sel = '';
$css_sel = '';
$ins_categoria_ins_marca_id = '';
if(in_array($ins_marca_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ins_categoria_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ins_marca_id', 'valor' => $ins_marca_relacionado->getId())
    );
    $ins_categoria_ins_marca = InsCategoriaInsMarca::getOxArray($array);
    $ins_categoria_ins_marca_id = $ins_categoria_ins_marca->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ALTA_RELACION_INS_MARCA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ins_marca_id_<?php echo $ins_marca_relacionado->getId() ?>' name='chk_ins_marca[<?php echo $ins_marca_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_marca_relacionado->getId() ?>' relacion_id='<?php echo $ins_categoria_ins_marca_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ALTA_RELACION_INS_MARCA_ACCIONES_EDITAR')){ ?>	
        <?php if($ins_categoria_ins_marca_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_categoria_ins_marca/ins_categoria_ins_marca_alta.php?id=<?php Gral::_echo($ins_categoria_ins_marca_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_marca_relacionado->getId()) ?>, 'ins_marca', 'ins_categoria', <?php Gral::_echo($o_padre->getId()) ?>, 'InsCategoria', 'InsCategoriaInsMarca')" title="Editar InsCategoriaInsMarca"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('INS_MARCA_ALTA')){ ?>	
        <a class='boton' href='ins_marca_alta.php?id=<?php echo $ins_marca_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_marca_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    
    <label class="avatar">
        <a href="<?php echo $ins_marca_relacionado->getPathImagenPrincipal() ?>" rel="imagen-ins_marca-<?php echo $ins_marca_relacionado->getId() ?>">
            <img src="<?php echo $ins_marca_relacionado->getPathImagenPrincipal(true) ?>" width="22" title="Imagen del InsMarca" />
        </a>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ins_marca_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ins_marca_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ins_marca_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($ins_categoria_ins_marca_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>


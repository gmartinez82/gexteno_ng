<?php
$sel = '';
$css_sel = '';
$vta_politica_descuento_ins_categoria_id = '';
if(in_array($vta_politica_descuento_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ins_categoria_id', 'valor' => $o_padre->getId()),
        array('campo' => 'vta_politica_descuento_id', 'valor' => $vta_politica_descuento_relacionado->getId())
    );
    $vta_politica_descuento_ins_categoria = VtaPoliticaDescuentoInsCategoria::getOxArray($array);
    $vta_politica_descuento_ins_categoria_id = $vta_politica_descuento_ins_categoria->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ALTA_RELACION_VTA_POLITICA_DESCUENTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_politica_descuento_id_<?php echo $vta_politica_descuento_relacionado->getId() ?>' name='chk_vta_politica_descuento[<?php echo $vta_politica_descuento_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_politica_descuento_relacionado->getId() ?>' relacion_id='<?php echo $vta_politica_descuento_ins_categoria_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ALTA_RELACION_VTA_POLITICA_DESCUENTO_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_politica_descuento_ins_categoria_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_politica_descuento_ins_categoria/vta_politica_descuento_ins_categoria_alta.php?id=<?php Gral::_echo($vta_politica_descuento_ins_categoria_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_politica_descuento_relacionado->getId()) ?>, 'vta_politica_descuento', 'ins_categoria', <?php Gral::_echo($o_padre->getId()) ?>, 'InsCategoria', 'VtaPoliticaDescuentoInsCategoria')" title="Editar VtaPoliticaDescuentoInsCategoria"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_ALTA')){ ?>	
        <a class='boton' href='vta_politica_descuento_alta.php?id=<?php echo $vta_politica_descuento_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_politica_descuento_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($vta_politica_descuento_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($vta_politica_descuento_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $vta_politica_descuento_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($vta_politica_descuento_ins_categoria_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

